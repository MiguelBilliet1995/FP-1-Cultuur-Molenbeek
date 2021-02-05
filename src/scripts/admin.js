// alle detail knoppen

let eventItems = [];

// evenementen

document.querySelectorAll('.button-detail').forEach((item) => {
  eventItems.push(item.id.split("-")[2]);

  item.addEventListener('click', (e) => {
    let element = e.path[0];
    let id = element.id.split("-")[2];

    switch(element.id.split("-")[0]){
      case "event":

        eventItems.map((itemId) => {
          document.querySelector("#event-top-" + itemId).classList.remove("active");
          document.querySelector('#event-bottom-' + itemId).style.display = "none";
          document.querySelector('#event-detail-' + itemId).style.backgroundImage = "url(../images/icons/admin/plus-square-regular.svg)";
        });

        document.querySelector('#event-detail-' + id).style.backgroundImage = "url(../images/icons/admin/minus-square-solid.svg)";
        document.querySelector('#event-top-' + id).classList.add("active");
        document.querySelector('#event-bottom-' + id).style.display = "flex";

      break;
      case "news":

        eventItems.map((itemId) => {
          document.querySelector("#news-top-" + itemId).classList.remove("active");
          document.querySelector('#news-bottom-' + itemId).style.display = "none";
          document.querySelector('#news-detail-' + itemId).style.backgroundImage = "url(../images/icons/admin/plus-square-regular.svg)";
        });
    
        document.querySelector('#news-detail-' + id).style.backgroundImage = "url(../images/icons/admin/minus-square-solid.svg)";
        document.querySelector('#news-top-' + id).classList.add("active");
        document.querySelector('#news-bottom-' + id).style.display = "flex";

      break
    }

  });
});

// alle inputs

function changedInput(e){
  let element = e.path[0];
  let id = element.id.split("-")[2];

  element.classList.add("changed");
  //document.querySelector('#event-undo-' + id).classList.remove("blocked");
  //document.querySelector('#event-undo-all').classList.remove("blocked");
  document.querySelector('#event-save-all').classList.remove("blocked");

  document.querySelectorAll('.saved').forEach((element) => {
    element.classList.remove("saved");
  });
}


document.querySelectorAll(".check-changed").forEach((input) => {
  input.addEventListener('keyup', (e) => {
    changedInput(e);
  });
  input.addEventListener('change', (e) => {
    changedInput(e);
  });

});


// savebutton
document.querySelector("#event-save-all").addEventListener('click', (e) => {

  document.querySelectorAll(".changed").forEach((element) => {
    element.classList.remove("changed");


    // stuur naar backend

    let splittedElement = element.id.split("-")
    let value = element.value;

    let ajax = ajaxObj("POST", "parser/API/controller-evenementen.php");
    ajax.onreadystatechange = function() {
      if(ajaxReturn(ajax) == true) {
        if(ajax.responseText == 0){

          element.classList.add("saved");
          //document.querySelector('#event-undo-' + splittedElement[2]).classList.add("blocked");
          //document.querySelector('#event-undo-all').classList.add("blocked");
          document.querySelector('#event-save-all').classList.add("blocked");

        }else{
          alert(ajax.responseText);
          element.classList.add("failed");
        }
      }
    }
    ajax.send("change="+splittedElement[2]+"&table="+splittedElement[0]+"&field="+splittedElement[1]+"&value="+value);

  });


});


// deletebuttons

document.querySelectorAll(".button-delete").forEach((input) => {
  input.addEventListener('click', (e) => {
    let element = e.path[0];
    let id = element.id.split("-")[2];
    
    let ajax = ajaxObj("POST", "parser/API/controller-evenementen.php");
    ajax.onreadystatechange = function() {
      if(ajaxReturn(ajax) == true) {
        if(ajax.responseText == 0){
          document.querySelector("#item-"+id).remove();
        }else{
          alert(ajax.responseText);
        }
      }
    }
    ajax.send("delete="+id);	

  });
});

// modal boxes

function openModalBox(modalbox){
  document.querySelector(".modalbox-container").style.display = "flex";
  document.querySelector("#" + modalbox).style.display = "block";
}

function closeAllModalBox(){
  document.querySelectorAll(".modal-box").forEach((element) => {
    element.style.display = "none";
  });
  document.querySelector(".modalbox-container").style.display = "none";
}

// tabs

document.querySelectorAll(".tab").forEach((element) => {
  element.addEventListener('click', (e) => {

    document.querySelectorAll(".card").forEach((element) => {
      element.style.display = "none";
    });

    document.querySelectorAll(".active").forEach((element) => {
      element.classList.remove("active");
    });

    document.querySelector("#card-" + e.path[0].id.split("-")[1]).style.display = "block";
    document.querySelector("#tab-" + e.path[0].id.split("-")[1]).classList.add("active");

  });
});