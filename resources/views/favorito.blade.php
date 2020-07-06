@extends('templates.institucional')
@section('titulo')
Favoritos
@endsection

@section('conteudo')
    <link rel="stylesheet" href="/css/favoritos.css">
    <main id="fav-content">
        <div>
            <h3>Meus Favoritos</h3>
        </div>
        <section>
            <table>
                <thead>
                    <tr>
                        <th></th>
                        <th>Livro</th>
                        <th>Editora</th>
                        <th>Preço</th>
                        <th class="description">Descrição</th>
                        <th>Remover</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <img src="img/quemmexeu.png" alt="Quem Mexeu no Meu Queijo" />
                        </td>
                        <td>Quem mexeu no meu queijo?</td>
                        <td>Saraiva</td>
                        <td>R$ 150,00</td>
                        <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</td>
                        <td>
                            <button class="btn"><i class="material-icons" aria-hidden="true">delete</i>Remover</button>
                        </td>
                    </tr><tr>
                        <td>
                            <img src="img/quemmexeu.png" alt="Quem Mexeu no Meu Queijo" />
                        </td>
                        <td>Quem mexeu no meu queijo?</td>
                        <td>Saraiva</td>
                        <td>R$ 150,00</td>
                        <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</td>
                        <td>
                            <button class="btn"><i class="material-icons" aria-hidden="true">delete</i>Remover</button>
                        </td>
                    </tr><tr>
                        <td>
                            <img src="img/quemmexeu.png" alt="Quem Mexeu no Meu Queijo" />
                        </td>
                        <td>Quem mexeu no meu queijo?</td>
                        <td>Saraiva</td>
                        <td>R$ 150,00</td>
                        <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</td>
                        <td>
                            <button class="btn"><i class="material-icons" aria-hidden="true">delete</i>Remover</button>
                        </td>
                    </tr><tr>
                        <td>
                            <img src="img/quemmexeu.png" alt="Quem Mexeu no Meu Queijo" />
                        </td>
                        <td>Quem mexeu no meu queijo?</td>
                        <td>Saraiva</td>
                        <td>R$ 150,00</td>
                        <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</td>
                        <td>
                            <button class="btn"><i class="material-icons" aria-hidden="true">delete</i>Remover</button>
                        </td>
                    </tr><tr>
                        <td>
                            <img src="img/quemmexeu.png" alt="Quem Mexeu no Meu Queijo" />
                        </td>
                        <td>Quem mexeu no meu queijo?</td>
                        <td>Saraiva</td>
                        <td>R$ 150,00</td>
                        <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</td>
                        <td>
                            <button class="btn"><i class="material-icons" aria-hidden="true">delete</i>Remover</button>
                        </td>
                    </tr><tr>
                        <td>
                            <img src="img/quemmexeu.png" alt="Quem Mexeu no Meu Queijo" />
                        </td>
                        <td>Quem mexeu no meu queijo?</td>
                        <td>Saraiva</td>
                        <td>R$ 150,00</td>
                        <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</td>
                        <td>
                            <button class="btn"><i class="material-icons" aria-hidden="true">delete</i>Remover</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </section>
    </main>
@endsection