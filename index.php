<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bad Words</title>
  </head>
  <body>
    <form action="censure.php">
      <input
        type="text"
        name="word"
        placeholder="Scrivi una parola da censurare..."
      />
      <textarea
        name="paragraph"
        placeholder="Scrivi un testo da censurare"
        cols="30"
        rows="1"
      ></textarea>
      <button>Censura</button>
    </form>
  </body>
</html>
