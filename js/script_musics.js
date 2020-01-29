$(document).ready(function() {
  $.ajax({
    url: "http://jihane.fr/dwmg2/api/music/liste.php",
    type: "GET",
    dataType: "json",
    success: function music_list(data) {

      for (i = 0; i < data.length; i++) {
        $("tbody").append("<tr id='tr_" + i + "'></tr>");
        $("#tr_" + i).append("<th>" + data[i].id + "</th>");
        $("#tr_" + i).append("<td>" + data[i].Titres + "</td>");
        $("#tr_" + i).append("<td>" + data[i].Artistes + "</td>");
        $("#tr_" + i).append(
          "<td> <button onclick='view_info(" +
            data[i].id +
            ")' type='button' class='btn btn-primary view_button' data-toggle='modal' data-target='#song_info'>View</button> </td>"
        );
      }
    }
  });
});

function view_info(id) {
  $(document).ready(function() {
    $.ajax({
      url: "http://jihane.fr/dwmg2/api/music/read.php",
      data: {
        id: id
      },
      type: "GET",
      dataType: "json",
      success: function(data) {
        $("#info_title_input").val(data.Titres);
        $("#info_artist_input").val(data.Artistes);
        $("#info_genre_input").val(data.Genres);
        $("#info_time_input").val(data.Temps);
        $("#info_date_input").val(data.Dates);
      }
    });
  });
}

function create() {
  $(document).ready(function() {
    $.ajax({
      url: "http://jihane.fr/dwmg2/api/music/create.php",
      type: "POST",
      data: {
        Titres: $("#info_title_input").val(),
        Artistes: $("#info_artist_input").val(),
        Genres: $("#info_title_input").val(),
        Temps: $("#info_title_input").val(),
        Dates: $("#info_title_input").val()
      },
      dataType: "json",
      success: function (data) {
        
      }
    });
  });
  music_list();
}
