#12 CALCULADORA DE POTENCIAS

base = int(input("ingrese la base: "))
exponente = int(input("ingrese el exponente: "))
resultado = 1

for _ in range(exponente):
    resultado *= base  

print(f"{base} elevado a la {exponente} es igual a {resultado}")
