fetch("http://jihane.fr/dwmg2/api/voiture/liste.php")
  .then(function(answer) {
    return answer.json();
  })
  .then(function(data) {
    for (i = 0; i < data.length; i++) {
      var tbody = document.getElementById("tbody");
      var tr = document.createElement("tr");

      tr.setAttribute("id", "tr_" + i);
      tbody.appendChild(tr);

      var th = document.createElement("th");
      th.innerHTML = data[i].id;
      tr.appendChild(th);

      var td = document.createElement("td");
      td.innerHTML = data[i].marque;
      tr.appendChild(td);

      var td = document.createElement("td");
      td.innerHTML = data[i].prix;
      tr.appendChild(td);

      var td = document.createElement("td");
      td.innerHTML =
        "<button onclick='view_info(" +
        data[i].id +
        ")' type='button' class='btn btn-primary view_button' data-toggle='modal' data-target='#car_info'>View</button>";
      tr.appendChild(td);
    }
  });

function view_info(id) {
    fetch("http://jihane.fr/dwmg2/api/voiture/liste.php?id=" + id)
        .then(function (answer) {
            return answer.json();
        })
        .then(function (data) {
            var brand_input = document.getElementById("info_brand_input");
            brand_input.value = data[id].marque;

            var model_input = document.getElementById("info_model_input");
            model_input.value = data[id].model;

            var range_input = document.getElementById("info_range_input");
            range_input.value = data[id].gamme;

            var price_input = document.getElementById("info_price_input");
            price_input.value = data[id].prix;
        })
};