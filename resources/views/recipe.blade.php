@extends('layouts.master')

@section('customcss')
    <link rel="Stylesheet" type="text/css" href="{{ asset('css/recept.css') }}">
@endsection

@section('content')
    <div id="titel">
        <h2>{{ $title }}</h2>
    </div>
    <div id="bild">
    <img src="{{ asset($image) }}" alt="Köttbullar_med_mos.jpg" />
    </div>
    <div id="ingredienser">
        {!! $ingredients !!}
    </div>
    <div id="beskrivning">
        {!! $description !!}
    </div>
    <div id="recensioner">
        <h3>Recensioner:</h3>
        @if(Auth::check())
            <div id="SkapaRecensioner">
                <div id="meddelande">
                    
                </div>
                <div id="inputfield">
                    
                </div>
            </div>
        @endif
        <div id="InlästaRecensioner">
            Kunde inte läsa in befintliga kommentarer.
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        var showAllComments = $(function() {
            $.getJSON("/api/comments?recipeId={{ $id }}", function(comments) {
                
                var uid = "{{ Auth::id() }}";

                var htmlAddComment = "";
                var rid = "{{ $id }}";
                if (uid != "") {
                    htmlAddComment = 
                        `<textarea id="inputcomment" placeholder="Kommentar" name="kommentar" required></textarea>
                        <span id="count"></span>
                        <button id="publishbtn">Publicera</button>`;
                }

                $("#inputfield").html(htmlAddComment);

                $("#inputcomment").keyup(function(){
                    var count = $("#inputcomment").val().length;
                    $("#count").html(count + "/1024");
                });

                $("#publishbtn").click(function() {
                    var comment = $("#inputcomment").val();
                    addComment(rid, uid, comment);
                });

                var htmlShowComments = "";
                if (comments) {
                    htmlShowComments += "<hr>";
                }
                for (i in comments) {
                    htmlShowComments += generateComment(comments[i], uid);
                }
                $("#InlästaRecensioner").html(htmlShowComments);
            });
        });

        var generateComment = function(comment, uid) {
            commentfield = "";
            commentfield += 
                `<div class="commentfield" data-id="${comment["commentId"]}">
                    <span class="uname">${comment["user"]["username"]}: </span>
                    <span class="comment">${comment["comment"]}</span>
                    <span class="deleteButton">`;
                
            if (uid == comment["userId"]) {
                commentfield +=
                    `<button class="delbtn" onclick="deleteComment(${comment["commentId"]})">Delete</button>`;
            }

            commentfield += `</span></div><hr>`;

            return commentfield;
        }

        var deleteComment = function(id) {
            $.post("/api/comments/delete_comment", { cid: id }, function(data, status, response) {
                if (response.status == 202) {
                    var commentField = $(".commentfield[data-id='" + id +"']");
                    commentField.next().remove();
                    commentField.remove();
                }
            });
        };

        var addComment = function($rid, $uid, $comment) {
            $.post("/api/comments/post_comment", { rid: $rid, uid: $uid, comment: $comment }, function(data, status, response) {
                if (response.status == 201) {
                    comment = JSON.parse(data);
                    var newComment = generateComment(comment, $uid);
                    $("#InlästaRecensioner").append(newComment);
                }
                else if (response.status == 200) {
                    text = "";
                    for (i in data) {
                        text += data[i] + "<br>";
                    }
                    $("#meddelande").html(text);
                }
            });
        }
    </script>
@endsection