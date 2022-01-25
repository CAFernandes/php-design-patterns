# php-design-patterns
Códigos de desing patterns feitos com o curso da Alura


```cmd
cd "your_path_files"
docker build . -t php-design
docker run -it -p 8080:8080 -v $(pwd):/usr/src/myapp --name my-server-design php-design
#Use -d para rodar o docker sem prender o terminal ou -it para ver os log do serviço rodando
docker ps
```
