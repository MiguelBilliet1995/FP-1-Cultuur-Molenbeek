// document.querySelector('.filter-listener').addEventListener('change', (e) => {
//     console.log(e.target.value);
//     window.location.href = `evenementen.php?filter=type&filterdata=${e.target.value}`;
// });
/*///////////////////////////////////////*/
// $('a').click(function() {
//     window.location.hash = 'price='+$(this).html();
//     return false;
// });

document.querySelector('.filter-listener').addEventListener('change', (e) => {
    window.location.href = `evenementen.php?filter=type&filterdata=${e.target.value}`;
    // window.location.href = `evenementen.php?sort=${id[1]}&sortdirection=${id[2]}`;
});

document.querySelector('.sort-listener').addEventListener('change', (e) => {
    let id = e.target.value.split("%");
    console.log(id[0]);
    console.log(e.target.value);
    window.location.href = `evenementen.php?sort=${id[0]}&sortdirection=${id[1]}`;
    // window.location.href = `evenementen.php?sort=${id[1]}&sortdirection=${id[2]}`;
});
