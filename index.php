<?php

include "templates/header.php";

?>

<div id="content_div">
    <h1 style="display: inline; margin: 2px">Music API </h1><button type="button" id="create_button" class="btn btn-primary" data-toggle="modal" data-target="#create_song">Create Song</button><button type="button" id="filter_button" class="btn btn-primary" data-toggle="modal" data-target="#filter_song">Filter</button>
    <div>
        <div id="main_div"></div>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th id="id" scope="col">#</th>
                    <th id="title" scope="col">Title</th>
                    <th id="genre" scope="col">Artist</th>
                    <th id="button" scope="col"></th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
        <!-- Modal -->
        <div class="modal fade" id="filter_song" tabindex="-1" role="dialog" aria-labelledby="filter_song_label" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="filter_song_label">Filter Songs</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="title_input">Artist</label>
                                <select class="custom-select">
                                    <option selected>Please pick one</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="title_input">Genre</label>
                                <select class="custom-select">
                                    <option selected>Please pick one</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">

                        <button type="button" class="btn btn-primary">Filter</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="create_song" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="create_song_title">Create Song</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="title_input">Title</label>
                                <input type="text" class="form-control" id="title_input">
                            </div>
                            <div class=" form-group">
                                <label for="artist_input">Artist</label>
                                <input type="text" class="form-control" id="artist_input">
                            </div>
                            <div class="form-group">
                                <label for="genre_input">Genre</label>
                                <input type="text" class="form-control" id="genre_input">
                            </div>
                            <div class=" form-group">
                                <label for="time_input">Time</label>
                                <input type="text" class="form-control" id="time_input">
                            </div>
                            <div class="form-group">
                                <label for="date_input">Date</label>
                                <input type="text" class="form-control" id="date_input">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button id="create" onclick="create()" type="submit" class="btn btn-primary">Create</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="song_info" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="song_info_title">Song Information</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="info_title_input">Title</label>
                            <input type="text" class="form-control" id="info_title_input" readonly>
                        </div>
                        <div class="form-group">
                            <label for="info_artist_input">Artist</label>
                            <input type="text" class="form-control" id="info_artist_input" readonly>
                        </div>
                        <div class="form-group">
                            <label for="info_genre_input">Genre</label>
                            <input type="text" class="form-control" id="info_genre_input" readonly>
                        </div>
                        <div class="form-group">
                            <label for="info_time_input">Time</label>
                            <input type="text" class="form-control" id="info_time_input" readonly>
                        </div>
                        <div class="form-group">
                            <label for="info_date_input">Date</label>
                            <input type="text" class="form-control" id="info_date_input" readonly>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Edit</button>
                    <button type="submit" class="btn btn-danger">Delete</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<?php

$script = "js/script_musics.js";
include "templates/footer.php";
