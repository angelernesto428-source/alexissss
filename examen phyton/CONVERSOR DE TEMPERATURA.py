#2 converdsor de temperatura

def convertir(c):

    return (c * 9/5) + 32

n = float(input("pon los grados: "))

print(f"la convedsion de grados farenheit es {convertir(n)} ")