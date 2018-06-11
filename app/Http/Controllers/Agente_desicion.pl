:-op(800,fx,si).
:-op(700,xfx,entonces).
:-op(300,xfy,o).
:-op(200,xfx,y).

si
antenas_no y (alas_no y exoesqueleto_si)
entonces
arana_roja.

si
antenas_no y (alas_no y (exoesqueleto_no y patas_mas_8))
entonces
larvas.

si
antenas_no y (alas_no y (exoesqueleto_no y (patas_0 y caparazon_si)))
entonces
caracol.

si
antenas_no y (alas_no y (exoesqueleto_no y (patas_0 y caparazon_no)))
entonces
babosa.

si
antenas_si y (alas_no y forma_alargada)
entonces
hormigas.

si
antenas_si y (alas_no y (forma_ovalada y patas_6))
entonces
picudo_rojo.

si
antenas_si y (alas_no y (forma_ovalada y patas_mas_8))
entonces
cochinillas.

si
antenas_si y (alas_si y tamano_menos_1_cm)
entonces
tipo_plaga_chupador.

si
antenas_si y (alas_si y tamano_mas_1_cm)
entonces
tipo_plaga_masticador.

si
tipo_plaga_masticador y forma_alargada
entonces
chapulines.

si
tipo_plaga_masticador y forma_ovalada
entonces
avispa_serradora.

si
tipo_plaga_chupador y forma_alargada
entonces
trips.

si
tipo_plaga_chupador y (forma_ovalada y color_verde o color_blanco)
entonces
mosca_blanca.

si
tipo_plaga_chupador y (forma_ovalada y color_negro o color_rojo)
entonces
pulgones.


hacia_delante(L):-
    nuevo_hecho_derivado(L,P),
    !,
    write('Derivado: '),write(P),nl,
    append([P],L,L1),
    hacia_delante(L1);
    write("No hay mas registros"),nl,
    write(L).

nuevo_hecho_derivado(L,Conclusion):-
    si Condicion entonces Conclusion,
    \+ member(Conclusion,L),
    hecho_compuesto(L,Condicion).

hecho_compuesto(L,Condicion):-
    member(Condicion,L).

hecho_compuesto(L,Cond1 y Cond2):-
    hecho_compuesto(L,Cond1),
    hecho_compuesto(L,Cond2).

hecho_compuesto(L,Cond1 o Cond2):-
    hecho_compuesto(L,Cond1);
    hecho_compuesto(L,Cond2).
