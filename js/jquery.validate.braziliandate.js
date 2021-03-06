/**
 * Adicionando método para validar datas no formato DD/MM/AAAA
 */
$.validator.addMethod("BrazilianDate", function(value, element, params) {
    /**
	 * Este params é para o validador funcionar bem em caso de usar outros campos para validação
	 * Tipo quando a validação deste campo depende da validade de outro campo
	 */
    if (params == false)
        return true;
    var digData = value;
    var bissexto = 0;
    var data = digData;
    var tam = data.length;
    if (tam == 10)
    {
        var dia = data.substr(0,2)
        var mes = data.substr(3,2)
        var ano = data.substr(6,4)
        if ((ano > 1900)||(ano < 2100))
        {
            switch (mes)
            {
                case '01':
                case '03':
                case '05':
                case '07':
                case '08':
                case '10':
                case '12':
                    if  (dia <= 31)
                    {
                        return true;
                    }
                    break
                case '04':
                case '06':
                case '09':
                case '11':
                    if  (dia <= 30)
                    {
                        return true;
                    }
                    break
                case '02':
                    /* Validando ano Bissexto / fevereiro / dia */
                    if ((ano % 4 == 0) || (ano % 100 == 0) || (ano % 400 == 0))
                    {
                        bissexto = 1;
                    }
                    if ((bissexto == 1) && (dia <= 29))
                    {
                        return true;
                    }
                    if ((bissexto != 1) && (dia <= 28))
                    {
                        return true;
                    }
                    break
            }
        }
    }
    return false;
}, "Data inválida!");