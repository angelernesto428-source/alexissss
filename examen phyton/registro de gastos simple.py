#REGISTRO DE GASTOS SIMPLE 20

def registrar_gastos():
   
    gastos = {}  
    total_gastos = 0
    
    print("registro de gastos. ponga salir si quiere salir.")

    while True:
        concepto = input("Ingresa el concepto del gasto (o 'salir'): ").lower()

        if concepto == "salir":
            break

        try:
            monto = float(input(f"Ingresa el monto para '{concepto}': "))
            gastos[concepto] = gastos.get(concepto, 0) + monto
            total_gastos += monto
            print(f"Gasto de {monto} para '{concepto}' registrado.")
        except ValueError:
            print("Entrada no válida. Por favor, ingresa un número para el monto.")

    print("\n--- Resumen de Gastos ---")
    if not gastos:
        print("No se registraron gastos.")
    else:
        for concepto, monto in gastos.items():
            print(f"- {concepto.capitalize()}: ${monto:.2f}")

    print(f"\n--- Total de Gastos: ${total_gastos:.2f} ---")


if __name__ == "__main__":
    registrar_gastos()