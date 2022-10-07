<form  action="thanks.php"  method="POST">

    <div>

      <label  for="nom">Nom :</label>

      <input  type="text"  id="nom"  name="user_name">
      <label  for="prenom">Prennom :</label>

      <input  type="text"  id="prenom"  name="user_firstname">

    </div>

    <div>

      <label  for="courriel">Courriel :</label>

        <input  type="email"  id="courriel"  name="user_email">

<label for="telephone">Telephone :</label>
        <input  type="tel"  id="telephone"  name="user_tel">
    </div>

    <div>
<label for="typeOfMessage">type:</label>
<select name="type" id="typeOfMessage">
<option value="divers">divers</option>
<option value="connerie">connerie</option>
<option value="macron">macron</option>


</select>
      <label  for="message">Message :</label>

      <textarea  id="message"  name="user_message"></textarea>

    </div>

    <div  class="button">

      <button  type="submit">Envoyer votre message</button>

    </div>

  </form>

  <?php
