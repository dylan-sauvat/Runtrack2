<html>
  <body>
    <form>
      Largeur: <input type="text" name="largeur" />
      Hauteur: <input type="text" name="hauteur" />
      <input type="submit" />
    </form>
    <script>
      var form = document.querySelector('form');
      form.addEventListener('submit', function(event) {
        event.preventDefault();
        const hauteur = form.elements.hauteur.value;
        const largeur = form.elements.largeur.value;
        const maison = '';
        for (let i = 0; i < hauteur; i++) {
          for (let j = 0; j < largeur; j++) {
            if (i === 0 || i === hauteur - 1) {
              maison += '*';
            } else if (j === 0 || j === largeur - 1) {
              maison += '*';
            } else {
              maison += ' ';
            }
          }
          