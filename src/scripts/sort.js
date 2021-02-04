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


// const rowBtn = document.getElementsByClassName('row-layout-btn');
// const boxBtn = document.getElementsByClassName('box-layout-btn');
// function changeEventLayoutBox() {
//     if(rowBtn.classlist.contains('active')){
//         rowBtn.classlist.remove('active');
//     }
//     boxBtn.classlist.add('active');
// }

// function changeEventLayoutRow() {
//     if(boxBtn.classlist.contains('active')){
//         boxBtn.classlist.remove('active');
//     }
//     rowBtn.classlist.add('active');
// }
