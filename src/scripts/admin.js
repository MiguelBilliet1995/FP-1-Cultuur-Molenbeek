// alle detail knoppen

let eventItems = [];

document.querySelectorAll('.button-detail').forEach((item) => {
  eventItems.push(item.id.split("-")[2]);

  item.addEventListener('click', (e) => {
    let element = e.path[0];
    let id = element.id.split("-")[2];

    eventItems.map((itemId) => {
      document.querySelector("#event-top-" + itemId).classList.remove("active");
      document.querySelector('#event-bottom-' + itemId).style.display = "none";
      document.querySelector('#event-detail-' + itemId).style.backgroundImage = "url(../images/icons/admin/plus-square-regular.svg)";
    });

    document.querySelector('#event-detail-' + id).style.backgroundImage = "url(../images/icons/admin/minus-square-solid.svg)";
    document.querySelector('#event-top-' + id).classList.add("active");
    document.querySelector('#event-bottom-' + id).style.display = "flex";

  });
});


// alle inputs

// textbox
document.querySelectorAll("input").forEach((input) => {
  input.addEventListener('keyup', (e) => {
    let element = e.path[0];
    let id = element.id.split("-")[2];

    element.classList.add("changed");
    document.querySelector('#event-undo-' + id).classList.remove("blocked");
    document.querySelector('#event-undo-all').classList.remove("blocked");
    document.querySelector('#event-save-all').classList.remove("blocked");
  });

});

// textarea
document.querySelectorAll("textarea").forEach((input) => {
  input.addEventListener('keyup', (e) => {
    let element = e.path[0];
    let id = element.id.split("-")[2];

    element.classList.add("changed");
    document.querySelector('#event-undo-' + id).classList.remove("blocked");
    document.querySelector('#event-undo-all').classList.remove("blocked");
    document.querySelector('#event-save-all').classList.remove("blocked");
  });

});


// savebutton
document.querySelector("#event-save-all").addEventListener('click', (e) => {

  let changedElements = document.querySelectorAll(".changed").forEach((element) => {
    element.classList.remove("changed");


    // stuur naar backend


    // respons

    element.classList.add("failed");

  });


});


function saveChanges(){

}

function addEvent(){

}

function removeEvent(){

}