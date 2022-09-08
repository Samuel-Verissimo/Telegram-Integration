<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Integração com o Telegram</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <style>
    .form-box {
      max-width: 500px;
      margin: auto;
      padding: 50px;
      background: #ffffff;
      border: 10px solid #f2f2f2;
    }
    </style>
</head>
<body>

</br></br></br>

<div class="form-box">
  <h4>Integração com telegram</h4>

  <p>
    <form id="msg_form" method="POST" action="send_msg.php">
      <div class="form-group">
        <label for="name">Para qual chat enviar?</label>
        <select class="form-select" id="chat" name="chat">
          <option value="2041625652">Chat do bot  (2041625652)</option>
          <option value="-761330787">Grupo de vendas  (-761330787)</option>
          <option value="-797287200">Grupo de consultoras  (-797287200)</option>
        </select>
      </div>
      <br/>
      <div class="form-group">
        <label for="message">Mensagem</label>
        <textarea class="form-control" id="mensagem" name="mensagem"></textarea>
      </div>
      <hr>
      <button class="btn btn-primary" type="submit">Enviar Telegram</button>
    </form>
  </p>

</div>
</body>
</html>


