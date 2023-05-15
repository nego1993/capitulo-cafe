FROM php:7.4-apache

# Cria as pastas para o site e gerenciador
RUN mkdir -p /var/www/site
RUN mkdir -p /var/www/gerenciador

# Copia o conteúdo do site para a pasta criada
COPY . /var/www/site/

# Copia o conteúdo do gerenciador para a pasta criada
COPY . /var/www/gerenciador/

# Copia os arquivos de configuração do site e do gerenciador para a pasta do Apache
COPY site.conf /etc/apache2/sites-available/site.conf
COPY gerenciador.conf /etc/apache2/sites-available/gerenciador.conf

# Habilita os sites
RUN a2ensite site.conf
RUN a2ensite gerenciador.conf

# Desabilita o site padrão do Apache
RUN a2dissite 000-default.conf

# Reinicia o serviço do Apache
RUN service apache2 restart

# Expor a porta 80 para o host
EXPOSE 80

# Define o comando padrão a ser executado ao iniciar o container
CMD ["apache2-foreground"]
