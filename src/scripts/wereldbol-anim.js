var animation = bodymovin.loadAnimation({
  container: document.getElementById('wereldbol'),
  renderer: 'svg',
  loop: true,
  autoplay: true,
  path: 'json/wereldbol.json',
  assetsPath: 'images/wereldbol-animatie/'
});