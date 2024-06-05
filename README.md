```py
try:
    while True:
        #pass  # O loop continuará indefinidamente até você pressionar "Ctrl + C"
        import qrcode
        text = input("Texto para QR Code: ")
        imagem = qrcode.make(text)
        imagem.save(f"qr_code/{text}.jpg")
        print("")
        print("--------------------")
        print("QR Code gerado")
        print("--------------------")
        print("")
except KeyboardInterrupt:
    print("Loop interrompido pelo usuário.")
```
