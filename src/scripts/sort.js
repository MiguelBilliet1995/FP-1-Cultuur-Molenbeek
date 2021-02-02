document.querySelector('.filter-listener').addEventListener('change', (e) => {
    console.log(e.target.value);
});
//     // eventItems.push(item.id.split("-")[2]);
//     item.addEventListener('change', (e) => {
//         console.log(e);
//     //     var filter = e.target.value;
//     });
// });

// document.querySelectorAll('.sort-options').forEach((item) => {
//     // eventItems.push(item.id.split("-")[2]);
//     item.addEventListener('change', (e) => {
//         var sort = e.target.value;
//         window.location.href = window.location.href + '?sort=' + sort + '&sortdirection=' +;
//     });
// }