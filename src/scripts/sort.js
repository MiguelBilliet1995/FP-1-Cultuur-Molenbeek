document.querySelector('.filter-listener').addEventListener('change', (e) => {
    console.log(e.target.value);
    window.location.href = `evenementen.php?filter=type&filterdata=${e.target.value}`;
});

document.querySelector('.sort-listener').addEventListener('change', (e) => {
    let id = e.target.value.split("%");
    console.log(id);
    console.log(e.target.value);
    window.location.href = `evenementen.php?sort=${id[1]}&sortdirection=${id[2]}`;
});
