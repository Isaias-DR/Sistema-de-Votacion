SELECT id_rut, dv, nombre, apellido, alias, email, region, comuna, fk_candidato
	FROM public.voto
;
SELECT fk_rut, fk_nosotro, n.nombre
	FROM public.voto_nosotro vn
	JOIN public.nosotro n ON n.id_nosotro = vn.fk_nosotro
	ORDER BY fk_rut
;
/*
DELETE FROM public.voto_nosotro;
DELETE FROM public.voto;
*/