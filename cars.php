<?php

include "templates/header.php";

?>

<div id="content_div">
    <h1 style="display: inline; margin: 2px">Cars API </h1><button type="button" id="create_button" class="btn btn-primary" data-toggle="modal" data-target="#create_car">Create Car</button><button type="button" id="filter_button" class="btn btn-primary" data-toggle="modal" data-target="#filter_car">Filter</button>
    <div>
        <div id="main_div"></div>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th id="id" scope="col">#</th>
                    <th id="title" scope="col">Brand</th>
                    <th id="genre" scope="col">Price</th>
                    <th id="button" scope="col"></th>
                </tr>
            </thead>
            <tbody id="tbody">
            </tbody>
        </table>
        <div class="modal fade" id="filter_car" tabindex="-1" role="dialog" aria-labelledby="filter_car_label" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="filter_car_label">Filter Cars</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="title_input">Brand</label>
                                <select class="custom-select">
                                    <option selected>Please pick one</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="title_input">Color</label>
                                <select class="custom-select">
                                    <option selected>Please pick one</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="title_input">Range</label>
                                <select class="custom-select">
                                    <option selected>Please pick one</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="title_input">Price</label>
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
        <div class="modal fade" id="create_car" tabindex="-1" role="dialog" aria-labelledby="create_car_label" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="create_car_title">Create Car</h5>
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
    <div class="modal fade" id="car_info" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="car_info_title">Car Information</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="info_brand_input">Brand</label>
                            <input type="text" class="form-control" id="info_brand_input" readonly>
                        </div>
                        <div class="form-group">
                            <label for="info_model_input">Model</label>
                            <input type="text" class="form-control" id="info_model_input" readonly>
                        </div>
                        <div class="form-group">
                            <label for="info_range_input">Range</label>
                            <input type="text" class="form-control" id="info_range_input" readonly>
                        </div>
                        <div class="form-group">
                            <label for="info_price_input">Price</label>
                            <input type="text" class="form-control" id="info_price_input" readonly>
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

$script = "js/script_cars.js";
include "templates/footer.php";
