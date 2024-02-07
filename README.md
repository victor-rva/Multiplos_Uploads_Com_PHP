# Upload de Arquivos

Este é um simples script em PHP e HTML para realizar o upload de arquivos para um servidor. O script permite que os usuários enviem arquivos através de um formulário web. Abaixo estão as instruções sobre como usar e configurar o script.

## Como Usar

1. Clone ou baixe este repositório para o seu ambiente web.
2. Certifique-se de que o diretório "uploads" tem permissões de escrita para que os arquivos enviados possam ser armazenados corretamente.
3. Abra o arquivo `index.php` em um navegador web.
4. Preencha seu nome no campo correspondente.
5. Selecione os arquivos que deseja enviar utilizando o botão "Escolher Arquivo".
6. Clique em "Enviar" para realizar o upload dos arquivos.

## Configuração

Não é necessário realizar muitas configurações, mas você pode ajustar algumas variáveis no código de acordo com suas necessidades:

- **Tamanho Máximo do Arquivo**: A variável `$tamanhoMaximo` define o tamanho máximo permitido para cada arquivo. O valor padrão é 5MB.

- **Tipos de Arquivos Permitidos**: A array `$arquivosPermitidos` contém as extensões de arquivo que são permitidas para upload.

- **Tipos MIME Permitidos**: A array `$typesPermitidos` contém os tipos MIME permitidos para upload.

- **Diretório de Upload**: O diretório de upload padrão é "uploads/". Certifique-se de que esse diretório exista e tenha as permissões corretas.

## Observações

- Certifique-se de que o PHP está habilitado e configurado corretamente no seu servidor web.
- É recomendado restringir ainda mais as permissões e validar os dados do usuário antes de salvar os arquivos no servidor em ambientes de produção.

Este script foi desenvolvido para fins educacionais e pode precisar de ajustes adicionais para atender às necessidades específicas do seu projeto.
