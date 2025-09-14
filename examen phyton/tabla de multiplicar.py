# 7  Tabla de Multiplicar  
numero = int(input("Ingresa un número para su tabla de multiplicar: "))
print(f"Tabla del {numero}:")
for i in range(1,11):
    print(f"{numero}•{i}= {numero*i}")