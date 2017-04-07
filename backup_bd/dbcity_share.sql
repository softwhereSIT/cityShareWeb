create database dbcity_share;
use dbcity_share;
/* TABELAS */
create table tbl_empresa(
idEmpresa integer primary key auto_increment not null,
nome_empresa varchar(100) not null,
cnpj varchar(20) not null,
historia_empresa text not null

);

create table tbl_faleconosco(
idFaleconosco integer primary key auto_increment not null,
nome varchar(100) not null,
email varchar(50) not null,
whatsapp varchar(20) not null,
texto varchar(300) not null
);

create table tbl_beneficios(
idBeneficios integer primary key auto_increment not null,
nome_beneficio varchar(50) not null,
descricao text not null,
img_beneficio varchar(20) not null

);

create table tbl_parceiros(
idParceiro integer primary key auto_increment not null,
nome_parceiro varchar(100) not null,
status boolean not null
);

create table tbl_slider(
idSlider integer primary key auto_increment not null,
imagens varchar(50) not null,
status boolean not null
);

create table tbl_cores(
idCor integer primary key auto_increment not null,
nome_cor varchar(50) not null,
hexadecimal varchar(10) not null
);

create table tbl_tema(
idTema integer primary key auto_increment not null,
tema varchar(50),
idCor integer not null,
imagem varchar(20),
status boolean not null
);

create table tbl_funcionario(
idFuncionario integer primary key auto_increment not null,
nome_func varchar(100) not null,
rg varchar(15),
cpf varchar(15),
data_nascimento date not null,
data_admissao date not null,
idCargos integer not null
);

create table tbl_cargos (
idCargos integer primary key auto_increment not null,
cargo varchar(100) not null
);

create table tbl_nivel(
idNivel integer primary key auto_increment not null,
niveis varchar(50)
);

create table tbl_func_nivel(
id integer primary key auto_increment not null,
idFuncionario integer not null,
idNivel integer not null
);

create table tbl_auditoria(
idAuditoria integer primary key auto_increment not null,
idFuncionario integer not null,
desc_acao text not null,
data_hora datetime not null
);

create table tbl_cliente (
idCliente integer primary key auto_increment not null,
nome_cliente varchar(100) not null,
telefone varchar(20) null,
celular varchar (20) not null,
email varchar(50) not null,
senha varchar(10) not null,
cpf_cnpj varchar(15) not null,
numero_cartao varchar(15) not null,
bandeira varchar(20) not null,
validade date not null,
cvv varchar(10)not null
);

create table tbl_cidade (
idCidade integer primary key auto_increment not null,
cidades varchar(100) not null
);

create table tbl_estado (
idEstado integer primary key auto_increment not null,
estados varchar(100) not null
);

create table tbl_endereco (
idEndereco integer primary key auto_increment not null,
idCliente integer not null,
idEstado integer not null,
idCidade integer not null,
cep varchar(10) not null,
rua varchar(50) not null,
bairro varchar (50) not null
);

create table tbl_plano (
idPlano integer primary key auto_increment not null,
plano varchar(100) not null,
valor float(6,2) not null
);

create table tbl_pedido(
idPedido integer primary key auto_increment not null,
idCliente integer not null,
nome_pedido varchar(100) not null,
data_pedido date not null,
data_entrega date not null,
valor_produto float(6,2) not null
);

create table tbl_termo_aceite(
idAceite integer primary key auto_increment not null,
texto text not null,
status boolean not null
);

create table tbl_itens(
idItens integer primary key auto_increment not null,
idVeiculo integer not null,
idPedido integer not null
);

create table tbl_veiculo(
idVeiculo integer primary key auto_increment not null,
nome_veiculo varchar(100) not null,
idCategoria integer not null,
idFabricante integer not null,
placa varchar(10) not null,
valor float(6,2) not null
);

create table tbl_tarifas(
idTarifa integer primary key auto_increment not null,
idVeiculo integer not null,
valor float (5,2)
);

create table tbl_categoria(
idCategoria integer primary key auto_increment not null,
categoria varchar(100) not null
);

create table tbl_atributos(
idAtributos integer primary key auto_increment not null,
atributos varchar(100) not null
);

create table tbl_atributos_especificos(
idEspecificos integer primary key auto_increment not null,
atributos_especificos varchar(100) not null
);

create table tbl_cat_atributos(
id integer primary key auto_increment not null,
idCategoria integer not null,
idAtributos integer not null
);

create table tbl_atributo_veiculo(
codigo integer primary key auto_increment not null,
idCategoria integer not null,
idEspecificos integer not null
);

create table tbl_modelo(
idModelo integer primary key auto_increment not null,
modelo varchar(100) not null,
ano_fabricacao date not null,
idCor integer not null
);

create table tbl_fabricante(
idFabricante integer primary key auto_increment not null,
nome_fabricante varchar(100) not null,
idModelo integer not null
);

create table tbl_imagem(
idImagem integer primary key auto_increment not null,
foto varchar(50) not null
);

create table tbl_imagem_veiculo(
codigo integer primary key auto_increment not null,
idVeiculo integer not null,
idImagem integer not null
);


/* FOREIGN KEY  */
alter table tbl_tema add constraint fk_cor foreign key (idCor) references tbl_cores ( idCor ) ;
alter table tbl_funcionario add constraint fk_cargo foreign key (idCargos) references tbl_cargos ( idCargos ) ;
alter table tbl_func_nivel add constraint fk_func foreign key (idFuncionario) references tbl_funcionario ( idFuncionario ) ;
alter table tbl_func_nivel add constraint fk_nivel foreign key (idNivel) references tbl_nivel ( idNivel ) ;
alter table tbl_auditoria add constraint fk_funcionario foreign key (idFuncionario) references tbl_funcionario (idFuncionario);
alter table tbl_endereco add constraint fk_cliente foreign key (idCliente) references tbl_cliente (idCliente);
alter table tbl_endereco add constraint fk_estado foreign key (idEstado) references tbl_estado (idEstado);
alter table tbl_endereco add constraint fk_cidade foreign key (idCidade) references tbl_cidade (idCidade);
alter table tbl_pedido add constraint fk_nomeCliente foreign key (idCliente) references tbl_cliente (idCliente);
alter table tbl_itens add constraint fk_veiculo foreign key (idVeiculo) references tbl_veiculo (idVeiculo);
alter table tbl_itens add constraint fk_pedido foreign key (idPedido) references tbl_pedido (idPedido);
alter table tbl_tarifas add constraint fk_veiculo_cat foreign key (idVeiculo) references tbl_veiculo (idVeiculo);
alter table tbl_cat_atributos add constraint fk_atributos foreign key (idAtributos) references tbl_atributos (idAtributos);
alter table tbl_cat_atributos add constraint fk_categoria foreign key (idCategoria) references tbl_categoria (idCategoria);
alter table tbl_atributo_veiculo add constraint fk_nomeCategoria foreign key (idCategoria) references tbl_categoria (idCategoria);
alter table tbl_atributo_veiculo add constraint fk_especificos foreign key (idEspecificos) references tbl_atributos_especificos (idEspecificos);
alter table tbl_modelo add constraint fk_corModelo foreign key (idCor) references tbl_cores ( idCor ) ;
alter table tbl_fabricante add constraint fk_modelo foreign key (idModelo) references tbl_modelo ( idModelo ) ;
alter table tbl_veiculo add constraint fk_cat foreign key (idCategoria) references tbl_categoria ( idCategoria ) ;
alter table tbl_veiculo add constraint fk_fabricante foreign key (idFabricante) references tbl_fabricante ( idFabricante ) ;
alter table tbl_imagem_veiculo add constraint fk_imgVeiculo foreign key (idVeiculo) references tbl_veiculo ( idVeiculo ) ;
alter table tbl_imagem_veiculo add constraint fk_foto foreign key (idImagem) references tbl_imagem ( idImagem );
