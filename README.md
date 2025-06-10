# 📚 Cursos Online

Repositório de um site simples para catálogo e visualização de cursos online com vídeos incorporados do YouTube.

## 🔗 Acesse o projeto

Você pode acessar o projeto hospedado no GitHub Pages:  
👉 [malikribeiro.github.io/Cursos-online](https://malikribeiro.github.io/Cursos-online)

---

## 🔗 Login

| Usuário                      | Senha       |
|-----------------------------|-------------|
| joao.silva@email.com        | senha123    |
| maria.souza@email.com       | minhasenha  |
| carlos.oliveira@email.com   | 123456      |

## 🚀 Funcionalidades

- Listagem de cursos com título, descrição e imagem (miniatura do vídeo)
- Cada curso possui um vídeo do YouTube incorporado
- Página individual para exibição da descrição completa e player do curso

---

## 📁 Estrutura do Projeto

Cursos-online/
├── index.html         # Página inicial com o catálogo de cursos
├── descricao.html     # Página de detalhes com vídeo incorporado do curso
├── cursos.js          # Arquivo com os dados dos cursos (título, descrição, link do vídeo)
├── script.js          # Script responsável por carregar e exibir os cursos dinamicamente
├── style.css          # Estilo visual da aplicação
└── imagens/           # Pasta opcional para armazenar imagens adicionais

---

## 🧠 Como funciona

Os dados dos cursos estão em um arquivo JavaScript (`cursos.js`) como um array de objetos.  
Cada objeto possui:

- `titulo`: nome do curso
- `descricao`: resumo do conteúdo
- `videoUrl`: link do vídeo no YouTube

A thumbnail do vídeo é gerada automaticamente a partir da URL do YouTube usando o padrão:
https://img.youtube.com/vi/ID_DO_VIDEO/hqdefault.jpg


A descrição completa e o player do vídeo são carregados dinamicamente na página `descricao.html`.

---

## 📌 Licença

Este projeto está sob a licença MIT.  
Sinta-se livre para usar e modificar para fins educacionais ou pessoais.
