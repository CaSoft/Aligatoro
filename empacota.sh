#!/bin/bash
#
# empacota.sh
#
# Script para empacotar o sistema Estrilo.
# O pacote criado pode sobrescrever uma instalação anterior do Estrilo, já que os arquivos de configuração são removidos do pacote.
# 
# Autor: Evaldo Junior <junior@casoft.info>
#
NOME_DIR=`pwd | tr \/ "\n" | tail -1`
DESTINO="/tmp/$NOME_DIR"

# Verificando se no TMP já tem algo
if [[ -d "$DESTINO" ]]
then
    rm -rf "$DESTINO"
fi

mkdir "$DESTINO"

# Copiando o projeto para o TMP.
cp -r * "$DESTINO"

# Removendo diretório com arquivos de configuração
rm -rf "$DESTINO/application/config"

# Compactando
tar -czf "$NOME_DIR.tar.gz" "$DESTINO"

echo "Empacotado!"

exit 0
