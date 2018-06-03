<?php include('includes/header.inc.php'); ?>
  <nav>
    <div class="nav-wrapper light-blue lighten-3">
      <div class="col s12">
        <a href="index.html" class="breadcrumb">Titulinis</a>
        <a href="kontaktai.php" class="breadcrumb">Kontaktai</a>
      </div>
    </div>
  </nav>
  <br><br>

  <div class="container">
    <div class="row">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2304.9845435796196!2d25.290128115703627!3d54.70989507940358!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dd96ae1dedd637%3A0x73978617430c730c!2sUlon%C5%B3+g.+5%2C+Vilnius+08240!5e0!3m2!1slt!2slt!4v1524046764951" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      <div class="col s12 m4">
        <h3>Mus rasite:</h3>
        <div>Ulonų g. 5, Vilnius</div>
        <div>2-a laiptinė, 5-as aukštas</div>
        <div>Tel.: +370 612 34567</div>
        <div>El. p.: info@ic.lt</div>
        <h5>Darbo laikas:</h5>
        <div>I-V - 8:00 - 17:00</div>
        <div>VI-VII - nedirbame</div>
      </div>
    </div>
    <div class="row">
      <h5 class="center-align" id="order">Norite užsakyti prekę? Gal būt ko nors neradote? Susisiekite su mumis!</h5>
      <br>
      <form class="col s12" action="includes/send.inc.php" method="post">
        <div class="row">
          <div class="input-field col s6">
            <input placeholder="Įveskite savo vardą" name="vardas" id="first_name" type="text" class="validate" required autofocus>
            <label for="first_name">Vardas</label>
          </div>
          <div class="input-field col s6">
            <input placeholder="Įveskite savo pavardę" name="pavarde" id="last_name" type="text" class="validate" required>
            <label for="last_name">Pavardė</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input placeholder="Įveskite įmonės pavadinimą" name="imone" id="company" type="text" class="validate">
            <label for="company">Įmonė</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input name="email" id="email" type="email" class="validate" required>
            <label for="email">El. paštas</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <textarea name="uzsakymas" id="textarea1" type="text" class="materialize-textarea validate" required></textarea>
            <label for="textarea1">Jūsų užsakymas/užklausa</label>
          </div>
        </div>
        <button class="btn waves-effect waves-light" type="submit" name="submit">Siųsti
          <i class="material-icons right">send</i>
        </button>
      </form>
    </div>
    <br><br>
  </div>
<?php include('includes/footer.inc.php'); ?>
