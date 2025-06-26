ambiente = int(input("tamanho do ambiente "))
janelas = int(input("quantas janelas "))
resultado = ambiente * 600 + 100

if(resultado < 10000):
    resultado = 9000
elif(resultado < 14000):
    resultado = 12000
elif(resultado < 20000):
    resultado = 18000

print(f"{resultado} btus")
