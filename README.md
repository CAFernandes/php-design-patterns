# php-design-patterns
Códigos de desing patterns feitos com o curso da Alura


```cmd
cd "your_path_files"
docker build . -t php-design-pattern
docker run -d/-it -v $(pwd):/var/www/html -p 8080:80 php-design-pattern
#Use -d para rodar o docker sem prender o terminal ou -it para ver os log do serviço rodando
docker ps
```
