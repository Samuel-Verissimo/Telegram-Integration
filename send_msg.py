# Biblioteca para fazer requisões via http
import requests


# Função para enviar mensagens via telagram com pyhton
def send_to_telegram(message):

    # Credencias do meu telegram
    apiToken = 'YOUR KEY'    # Api do meu bot                     
    apiURL = f'https://api.telegram.org/bot{apiToken}/sendMessage' # Api resposanvel por enviar a mensagem
    chatID = '-761330787' # -763496262'   

    try:
        response = requests.post(apiURL, json={'chat_id': chatID, 'text': message})
        print(response.text)
    except Exception as e:
        print(e)


# Chamando função com a mensagem
send_to_telegram("Atenção! algo deu errado... testando envio de mensagem com Python")
