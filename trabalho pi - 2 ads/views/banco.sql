
CREATE TABLE livraria.Tb_Genero (
                iid_genero INTEGER NOT NULL,
                nm_genero VARCHAR(30) NOT NULL,
                CONSTRAINT id_genero PRIMARY KEY (iid_genero)
);


CREATE UNIQUE INDEX tb_genero_idx
 ON livraria.Tb_Genero
 ( nm_genero );

CREATE TABLE livraria.Tb_Estado (
                cd_estado INTEGER NOT NULL,
                nm_estado VARCHAR(30) NOT NULL,
                CONSTRAINT cd_estado PRIMARY KEY (cd_estado)
);


CREATE UNIQUE INDEX tb_estado_idx
 ON livraria.Tb_Estado
 ( nm_estado );

CREATE TABLE livraria.Tb_Editora (
                id_editora INTEGER NOT NULL,
                nm_editora VARCHAR(30) NOT NULL,
                ds_email VARCHAR(30) NOT NULL,
                nu_telefone INTEGER NOT NULL,
                cd_estado INTEGER NOT NULL,
                CONSTRAINT id_editora PRIMARY KEY (id_editora)
);


CREATE UNIQUE INDEX tb_editora_idx
 ON livraria.Tb_Editora
 ( nm_editora );

CREATE TABLE livraria.Tb_Livro (
                id_livro INTEGER NOT NULL,
                nm_livro VARCHAR(30) NOT NULL,
                id_editora INTEGER NOT NULL,
                ds_descricao OTHER NOT NULL,
                ds_arquivo VARCHAR(300) NOT NULL,
                CONSTRAINT id_livro PRIMARY KEY (id_livro)
);


CREATE UNIQUE INDEX tb_livro_idx
 ON livraria.Tb_Livro
 ( nm_livro );

CREATE TABLE livraria.Tb_Versao (
                id_versao INTEGER NOT NULL,
                id_livro INTEGER NOT NULL,
                nu_tamanho NUMERIC NOT NULL,
                nu_ano DATE NOT NULL,
                nu_peso NUMERIC NOT NULL,
                nu_preco NUMERIC NOT NULL,
                nu_isbn INTEGER NOT NULL,
                nu_aquisao DATE NOT NULL,
                nu_qtde INTEGER NOT NULL,
                CONSTRAINT id_versao PRIMARY KEY (id_versao, id_livro)
);


CREATE UNIQUE INDEX tb_versao_idx
 ON livraria.Tb_Versao
 ( nu_isbn );

CREATE TABLE livraria.Tb_GeneroLivro (
                iid_genero INTEGER NOT NULL,
                id_livro INTEGER NOT NULL,
                CONSTRAINT id_generolivro PRIMARY KEY (iid_genero, id_livro)
);


CREATE TABLE livraria.Tb_Cargo (
                id_cargo INTEGER NOT NULL,
                nm_cargo VARCHAR(30) NOT NULL,
                CONSTRAINT nm_cargo PRIMARY KEY (id_cargo)
);


CREATE UNIQUE INDEX tb_cargo_idx
 ON livraria.Tb_Cargo
 ( nm_cargo );

CREATE TABLE livraria.Tb_Pessoa (
                id_pessoa INTEGER NOT NULL,
                nm_pessoa VARCHAR(50) NOT NULL,
                dt_admissao DATE,
                ds_email VARCHAR(100) NOT NULL,
                senha VARCHAR(20) NOT NULL,
                nu_cpf CHAR(11) NOT NULL,
                f_isFuncionario BOOLEAN NOT NULL,
                id_cargo INTEGER,
                CONSTRAINT id_pessoa PRIMARY KEY (id_pessoa)
);


CREATE UNIQUE INDEX tb_pessoa_idx
 ON livraria.Tb_Pessoa
 ( nu_cpf );

CREATE TABLE livraria.Tb_Venda (
                id_venda INTEGER NOT NULL,
                id_pessoa INTEGER NOT NULL,
                dt_compra DATE NOT NULL,
                fl_tipoPagamento UNKNOWN NOT NULL,
                CONSTRAINT id_venda PRIMARY KEY (id_venda)
);


CREATE TABLE livraria.Tb_ItemVenda (
                id_venda INTEGER NOT NULL,
                id_versao INTEGER NOT NULL,
                id_livro INTEGER NOT NULL,
                nu_qtde INTEGER NOT NULL,
                vl_preco NUMERIC NOT NULL,
                CONSTRAINT id_itemvenda PRIMARY KEY (id_venda, id_versao, id_livro)
);


ALTER TABLE livraria.Tb_GeneroLivro ADD CONSTRAINT tb_genero_tb_generolivro_fk
FOREIGN KEY (iid_genero)
REFERENCES livraria.Tb_Genero (iid_genero)
ON DELETE NO ACTION
ON UPDATE NO ACTION
NOT DEFERRABLE;

ALTER TABLE livraria.Tb_Editora ADD CONSTRAINT tb_estado_tb_editora_fk
FOREIGN KEY (cd_estado)
REFERENCES livraria.Tb_Estado (cd_estado)
ON DELETE NO ACTION
ON UPDATE NO ACTION
NOT DEFERRABLE;

ALTER TABLE livraria.Tb_Livro ADD CONSTRAINT tb_editora_tb_livro_fk
FOREIGN KEY (id_editora)
REFERENCES livraria.Tb_Editora (id_editora)
ON DELETE NO ACTION
ON UPDATE NO ACTION
NOT DEFERRABLE;

ALTER TABLE livraria.Tb_GeneroLivro ADD CONSTRAINT tb_livro_tb_generolivro_fk
FOREIGN KEY (id_livro)
REFERENCES livraria.Tb_Livro (id_livro)
ON DELETE NO ACTION
ON UPDATE NO ACTION
NOT DEFERRABLE;

ALTER TABLE livraria.Tb_Versao ADD CONSTRAINT tb_livro_tb_versao_fk
FOREIGN KEY (id_livro)
REFERENCES livraria.Tb_Livro (id_livro)
ON DELETE NO ACTION
ON UPDATE NO ACTION
NOT DEFERRABLE;

ALTER TABLE livraria.Tb_ItemVenda ADD CONSTRAINT tb_versao_tb_itemvenda_fk
FOREIGN KEY (id_versao, id_livro)
REFERENCES livraria.Tb_Versao (id_versao, id_livro)
ON DELETE NO ACTION
ON UPDATE NO ACTION
NOT DEFERRABLE;

ALTER TABLE livraria.Tb_Pessoa ADD CONSTRAINT tb_cargo_tb_pessoa_fk
FOREIGN KEY (id_cargo)
REFERENCES livraria.Tb_Cargo (id_cargo)
ON DELETE NO ACTION
ON UPDATE NO ACTION
NOT DEFERRABLE;

ALTER TABLE livraria.Tb_Venda ADD CONSTRAINT tb_pessoa_tb_venda_fk
FOREIGN KEY (id_pessoa)
REFERENCES livraria.Tb_Pessoa (id_pessoa)
ON DELETE NO ACTION
ON UPDATE NO ACTION
NOT DEFERRABLE;

ALTER TABLE livraria.Tb_ItemVenda ADD CONSTRAINT tb_venda_tb_itemvenda_fk
FOREIGN KEY (id_venda)
REFERENCES livraria.Tb_Venda (id_venda)
ON DELETE NO ACTION
ON UPDATE NO ACTION
NOT DEFERRABLE;