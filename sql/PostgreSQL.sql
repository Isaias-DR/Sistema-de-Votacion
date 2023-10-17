--
-- PostgreSQL database dump
--

-- Dumped from database version 16.0
-- Dumped by pg_dump version 16.0

-- Started on 2023-09-30 18:34:20

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

--
-- TOC entry 219 (class 1255 OID 16713)
-- Name: insertar_voto(character varying, character varying, character varying, integer, character, character varying, integer, integer, integer); Type: FUNCTION; Schema: public; Owner: postgres
--

CREATE FUNCTION public.insertar_voto(nombre character varying, apellido character varying, alias character varying, id_rut integer, dv character, email character varying, region integer, comuna integer, fk_candidato integer) RETURNS void
    LANGUAGE plpgsql
    AS $$
BEGIN
    INSERT INTO voto (nombre, apellido, alias, id_rut, dv, email, region, comuna, fk_candidato)
    VALUES (nombre, apellido, alias, id_rut, dv, email, region, comuna, fk_candidato);
END;
$$;


ALTER FUNCTION public.insertar_voto(nombre character varying, apellido character varying, alias character varying, id_rut integer, dv character, email character varying, region integer, comuna integer, fk_candidato integer) OWNER TO postgres;

--
-- TOC entry 220 (class 1255 OID 16714)
-- Name: insertar_voto_nosotro(integer, integer); Type: FUNCTION; Schema: public; Owner: postgres
--

CREATE FUNCTION public.insertar_voto_nosotro(id_rut integer, id_nosotro integer) RETURNS void
    LANGUAGE plpgsql
    AS $$
BEGIN
    INSERT INTO voto_nosotro (fk_rut, fk_nosotro) VALUES (id_rut, id_nosotro);
END;
$$;


ALTER FUNCTION public.insertar_voto_nosotro(id_rut integer, id_nosotro integer) OWNER TO postgres;

--
-- TOC entry 221 (class 1255 OID 16715)
-- Name: obtener_cantidad_votos(integer); Type: FUNCTION; Schema: public; Owner: postgres
--

CREATE FUNCTION public.obtener_cantidad_votos(p_rut integer) RETURNS integer
    LANGUAGE plpgsql
    AS $$
DECLARE
    total_filas INT;
BEGIN
    -- Realizar la consulta SELECT y contar las filas
    SELECT COUNT(*) INTO total_filas FROM voto WHERE id_rut = p_rut;
    
    -- Retornar el resultado
    RETURN total_filas;
END;
$$;


ALTER FUNCTION public.obtener_cantidad_votos(p_rut integer) OWNER TO postgres;

SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- TOC entry 215 (class 1259 OID 16716)
-- Name: candidato; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.candidato (
    id_candidato numeric(2,0) NOT NULL,
    nombre character(20) NOT NULL
);


ALTER TABLE public.candidato OWNER TO postgres;

--
-- TOC entry 216 (class 1259 OID 16721)
-- Name: nosotro; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.nosotro (
    id_nosotro numeric(1,0) NOT NULL,
    nombre character(20) NOT NULL
);


ALTER TABLE public.nosotro OWNER TO postgres;

--
-- TOC entry 217 (class 1259 OID 16726)
-- Name: voto; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.voto (
    id_rut numeric(8,0) NOT NULL,
    dv character(1) NOT NULL,
    nombre character(50) NOT NULL,
    apellido character(50) NOT NULL,
    alias character(50) NOT NULL,
    email character(70) NOT NULL,
    region numeric(11,0) NOT NULL,
    comuna numeric(11,0) NOT NULL,
    fk_candidato numeric(2,0) NOT NULL
);


ALTER TABLE public.voto OWNER TO postgres;

--
-- TOC entry 218 (class 1259 OID 16731)
-- Name: voto_nosotro; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.voto_nosotro (
    fk_rut numeric(8,0) NOT NULL,
    fk_nosotro numeric(1,0) NOT NULL
);


ALTER TABLE public.voto_nosotro OWNER TO postgres;

--
-- TOC entry 4856 (class 0 OID 16716)
-- Dependencies: 215
-- Data for Name: candidato; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.candidato VALUES (1, 'Raul');
INSERT INTO public.candidato VALUES (2, 'Luis');
INSERT INTO public.candidato VALUES (3, 'Consuelo');
INSERT INTO public.candidato VALUES (4, 'Josefa');


--
-- TOC entry 4857 (class 0 OID 16721)
-- Dependencies: 216
-- Data for Name: nosotro; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.nosotro VALUES (1, 'Web');
INSERT INTO public.nosotro VALUES (2, 'TV');
INSERT INTO public.nosotro VALUES (3, 'Redes sociales');
INSERT INTO public.nosotro VALUES (4, 'Amigo');


--
-- TOC entry 4858 (class 0 OID 16726)
-- Dependencies: 217
-- Data for Name: voto; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- TOC entry 4859 (class 0 OID 16731)
-- Dependencies: 218
-- Data for Name: voto_nosotro; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- TOC entry 4709 (class 2606 OID 16888)
-- Name: voto_nosotro nosotro_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.voto_nosotro
    ADD CONSTRAINT nosotro_pkey PRIMARY KEY (fk_rut, fk_nosotro);


--
-- TOC entry 4703 (class 2606 OID 16857)
-- Name: candidato pk_candidato; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.candidato
    ADD CONSTRAINT pk_candidato PRIMARY KEY (id_candidato);


--
-- TOC entry 4705 (class 2606 OID 16877)
-- Name: nosotro pk_nosotro; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.nosotro
    ADD CONSTRAINT pk_nosotro PRIMARY KEY (id_nosotro);


--
-- TOC entry 4707 (class 2606 OID 16758)
-- Name: voto pk_rut; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.voto
    ADD CONSTRAINT pk_rut PRIMARY KEY (id_rut);


--
-- TOC entry 4710 (class 2606 OID 16867)
-- Name: voto fk_candidato; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.voto
    ADD CONSTRAINT fk_candidato FOREIGN KEY (fk_candidato) REFERENCES public.candidato(id_candidato) NOT VALID;


--
-- TOC entry 4711 (class 2606 OID 16889)
-- Name: voto_nosotro fk_nosotro; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.voto_nosotro
    ADD CONSTRAINT fk_nosotro FOREIGN KEY (fk_nosotro) REFERENCES public.nosotro(id_nosotro) NOT VALID;


--
-- TOC entry 4712 (class 2606 OID 16823)
-- Name: voto_nosotro fk_voto; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.voto_nosotro
    ADD CONSTRAINT fk_voto FOREIGN KEY (fk_rut) REFERENCES public.voto(id_rut) NOT VALID;


-- Completed on 2023-09-30 18:34:20

--
-- PostgreSQL database dump complete
--

