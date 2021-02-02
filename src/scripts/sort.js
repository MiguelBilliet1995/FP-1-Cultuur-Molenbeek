document.querySelector('.filter-listener').addEventListener('change', (e) => {
    console.log(e.target.value);
    window.location.href = `evenementen.php?filter=type&filterdata=${e.target.value}`;
});
