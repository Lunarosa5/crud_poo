## EXERCÍCIOS DE APROPRIAÇÃO

**- Onde acontece o CRUD?**

Acontece na classe MusicaRepository (na pasta repositories). E é onde é localizado os comandos do banco de dados (INSERT, SELECT, UPDATE e DELETE) para criar, listar, atualizar e excluir as músicas.

**- Onde ficam as regras de negócio?**

Ficam na classe Musica (na pasta models), que define o que uma música tem (título, artista, gênero e link), e nas páginas da pasta public, que recebem o que o usuário digitou e chamam o repositório.

**- Por que a classe Musica (ou Cliente) não acessa o banco diretamente?**

Para dividir as tarefas e deixar o código organizado. A classe Musica serve só para guardar os dados da música, enquanto o MusicaRepository cuida do banco. Assim, se for necessário trocar o banco no futuro, mexemos só no repositório sem desorganizar o resto do sistema.

---

## DESAFIO PROFISSIONAL

**- O Repository pode ser reutilizado?**

Sim, mas para um novo tipo de dado, por exemplo, playlists, criamos um novo arquivo, como PlaylistRepository, seguindo o mesmo modelo do de músicas.

**- O que muda?**

O que muda são os dados de cada entidade. Por exemplo, precisamos criar uma nova tabela no banco, uma nova classe com seus próprios atributos, os comandos SQL específicos no novo repositório e as telas na pasta public para cadastrar, editar, listar e excluir esses dados.

**- O que permanece igual?**

organização das pastas, a conexão com o banco (Database.php) e a estrutura dos métodos da RepositoryInterface continuam exatamente os mesmos.