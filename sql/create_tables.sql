--
-- TOC entry 170 (class 1259 OID 26018072)
-- Name: activite; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE activite (
    id_activite integer NOT NULL,
    id_semaine integer,
    annee integer,
    id_jour integer,
    id_agent integer,
    id_action integer,
    id_activite_transv integer,
    id_maitrise integer,
    id_commune integer,
    id_territoire integer,
    id_duree integer,
    commentaire character varying,
    date_creation timestamp without time zone,
    date_modif timestamp without time zone
);


ALTER TABLE public.activite OWNER TO postgres;

--
-- TOC entry 171 (class 1259 OID 26018078)
-- Name: activite_id_activite_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE activite_id_activite_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.activite_id_activite_seq OWNER TO postgres;

--
-- TOC entry 2148 (class 0 OID 0)
-- Dependencies: 171
-- Name: activite_id_activite_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE activite_id_activite_seq OWNED BY activite.id_activite;


--
-- TOC entry 172 (class 1259 OID 26018080)
-- Name: dico_action; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE dico_action (
    id_action integer NOT NULL,
    num_action character varying(10),
    lib_action character varying(500),
    info_action character varying,
    id_theme integer,
    id_territoire integer,
    id_maitrise integer
);


ALTER TABLE public.dico_action OWNER TO postgres;

--
-- TOC entry 173 (class 1259 OID 26018086)
-- Name: dico_activite_transv; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE dico_activite_transv (
    id_activite_transv integer NOT NULL,
    lib_activite_transv character varying
);


ALTER TABLE public.dico_activite_transv OWNER TO postgres;

--
-- TOC entry 174 (class 1259 OID 26018092)
-- Name: dico_agent; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE dico_agent (
    id_utilisateur integer NOT NULL,
    login_agent character varying(50),
    mdp_agent character varying(10),
    nom_agent character varying(50),
    prenom_agent character varying(50),
    id_service integer
);


ALTER TABLE public.dico_agent OWNER TO postgres;

--
-- TOC entry 175 (class 1259 OID 26018095)
-- Name: dico_commune; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE dico_commune (
    id_commune integer NOT NULL,
    lib_commune character varying(50)
);


ALTER TABLE public.dico_commune OWNER TO postgres;

--
-- TOC entry 176 (class 1259 OID 26018098)
-- Name: dico_domaine_activite; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE dico_domaine_activite (
    id_domaine_acti integer NOT NULL,
    num_domaine_acti character varying(10),
    acron_domaine_acti character varying(10),
    lib_domaine_acti character varying(500),
    info_domaine_acti character varying
);


ALTER TABLE public.dico_domaine_activite OWNER TO postgres;

--
-- TOC entry 177 (class 1259 OID 26018104)
-- Name: dico_duree; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE dico_duree (
    id_duree integer NOT NULL,
    lib_duree character varying(10),
    bool_life boolean
);


ALTER TABLE public.dico_duree OWNER TO postgres;

--
-- TOC entry 178 (class 1259 OID 26018107)
-- Name: dico_jour; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE dico_jour (
    id_jour integer NOT NULL,
    lib_jour character varying(10)
);


ALTER TABLE public.dico_jour OWNER TO postgres;

--
-- TOC entry 179 (class 1259 OID 26018110)
-- Name: dico_maitrise; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE dico_maitrise (
    id_maitrise integer NOT NULL,
    lib_maitrise character varying(500)
);


ALTER TABLE public.dico_maitrise OWNER TO postgres;

--
-- TOC entry 180 (class 1259 OID 26018113)
-- Name: dico_semaine; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE dico_semaine (
    id_semaine integer NOT NULL,
    lib_semaine character varying(15)
);


ALTER TABLE public.dico_semaine OWNER TO postgres;

--
-- TOC entry 181 (class 1259 OID 26018116)
-- Name: dico_service; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE dico_service (
    id_service integer NOT NULL,
    lib_service character varying
);


ALTER TABLE public.dico_service OWNER TO postgres;

--
-- TOC entry 182 (class 1259 OID 26018122)
-- Name: dico_territoire; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE dico_territoire (
    id_territoire integer NOT NULL,
    lib_territoire character varying(200)
);


ALTER TABLE public.dico_territoire OWNER TO postgres;

--
-- TOC entry 183 (class 1259 OID 26018125)
-- Name: dico_theme; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE dico_theme (
    id_theme integer NOT NULL,
    id_domaine_acti integer,
    num_theme character varying(10),
    lib_theme character varying(500),
    info_theme character varying
);


ALTER TABLE public.dico_theme OWNER TO postgres;

--
-- TOC entry 186 (class 1259 OID 26018271)
-- Name: rel_territoire_commune; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE rel_territoire_commune (
    id_rel_terr_com integer NOT NULL,
    id_territoire integer NOT NULL,
    id_commune integer NOT NULL
);


ALTER TABLE public.rel_territoire_commune OWNER TO postgres;

--
-- TOC entry 185 (class 1259 OID 26018269)
-- Name: rel_territoire_commune_id_rel_terr_com_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE rel_territoire_commune_id_rel_terr_com_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.rel_territoire_commune_id_rel_terr_com_seq OWNER TO postgres;

--
-- TOC entry 2149 (class 0 OID 0)
-- Dependencies: 185
-- Name: rel_territoire_commune_id_rel_terr_com_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE rel_territoire_commune_id_rel_terr_com_seq OWNED BY rel_territoire_commune.id_rel_terr_com;


--
-- TOC entry 184 (class 1259 OID 26018134)
-- Name: rel_val_action_annee; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE rel_val_action_annee (
    id_action integer NOT NULL,
    annee_non_valide integer NOT NULL
);


ALTER TABLE public.rel_val_action_annee OWNER TO postgres;

--
-- TOC entry 1951 (class 2604 OID 26018137)
-- Name: id_activite; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY activite ALTER COLUMN id_activite SET DEFAULT nextval('activite_id_activite_seq'::regclass);


--
-- TOC entry 1952 (class 2604 OID 26018274)
-- Name: id_rel_terr_com; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY rel_territoire_commune ALTER COLUMN id_rel_terr_com SET DEFAULT nextval('rel_territoire_commune_id_rel_terr_com_seq'::regclass);


--
-- TOC entry 2123 (class 0 OID 26018072)
-- Dependencies: 170
-- Data for Name: activite; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO activite VALUES (37, NULL, NULL, NULL, NULL, 3, NULL, 3, 4, 4, 3, 'sdfgfdg', NULL, NULL);
INSERT INTO activite VALUES (35, NULL, NULL, NULL, NULL, 11, NULL, 4, 3, 4, 3, 'fsdfsdf', NULL, NULL);
INSERT INTO activite VALUES (38, NULL, NULL, NULL, NULL, 2, NULL, 2, 2, 3, 2, NULL, NULL, NULL);
INSERT INTO activite VALUES (39, NULL, NULL, NULL, NULL, 3, NULL, 3, 3, 3, 2, NULL, NULL, NULL);
INSERT INTO activite VALUES (41, NULL, NULL, NULL, NULL, 3, NULL, 3, 3, 3, 2, NULL, NULL, NULL);


--
-- TOC entry 2150 (class 0 OID 0)
-- Dependencies: 171
-- Name: activite_id_activite_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('activite_id_activite_seq', 41, true);


--
-- TOC entry 2125 (class 0 OID 26018080)
-- Dependencies: 172
-- Data for Name: dico_action; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO dico_action VALUES (1, '1.1.1', 'action 1.1.1', NULL, 1, 0, 1);
INSERT INTO dico_action VALUES (2, '1.2.1', 'action 1.2.1', NULL, 2, 0, 0);
INSERT INTO dico_action VALUES (3, '1.3.1', 'action 1.3.1', NULL, 3, 0, 0);
INSERT INTO dico_action VALUES (4, '2.1.1', 'action 2.1.1', NULL, 4, 0, 0);
INSERT INTO dico_action VALUES (5, '2.1.2', 'action 2.1.2', NULL, 4, 0, 0);
INSERT INTO dico_action VALUES (6, '2.2.1', 'action 2.2.1', NULL, 5, 0, 0);
INSERT INTO dico_action VALUES (7, '2.3.1', 'action 2.3.1', NULL, 6, 1, 0);
INSERT INTO dico_action VALUES (8, '3.1.1', 'action 3.1.1', NULL, 7, 0, 0);
INSERT INTO dico_action VALUES (9, '3.2.1', 'action 3.2.1', NULL, 8, 0, 0);
INSERT INTO dico_action VALUES (10, '3.3.1', 'action 3.3.1', NULL, 9, 3, 0);
INSERT INTO dico_action VALUES (11, '3.3.2', 'action 3.3.2', NULL, 9, 3, 0);
INSERT INTO dico_action VALUES (12, '3.3.3', 'action 3.3.3', NULL, 9, 3, 0);
INSERT INTO dico_action VALUES (13, '3.3.4', 'action 3.3.4', NULL, 9, 3, 0);
INSERT INTO dico_action VALUES (14, '4.1.1', 'action 4.1.1', NULL, 10, 0, 0);
INSERT INTO dico_action VALUES (15, '4.2.1', 'action 4.2.1', NULL, 11, 0, 0);
INSERT INTO dico_action VALUES (16, '4.3.1', 'action 4.3.1', NULL, 12, 0, 2);
INSERT INTO dico_action VALUES (17, '5.1.1', 'action 5.1.1', NULL, 13, 4, 0);
INSERT INTO dico_action VALUES (18, '5.2.1', 'action 5.2.1', NULL, 14, 0, 0);
INSERT INTO dico_action VALUES (19, '5.2.2', 'action 5.2.2', NULL, 14, 0, 1);
INSERT INTO dico_action VALUES (20, '5.3.1', 'action 5.3.1', NULL, 15, 0, 3);
INSERT INTO dico_action VALUES (21, '6.1.1', 'action 6.1.1', NULL, 16, 0, 0);
INSERT INTO dico_action VALUES (22, '6.1.2', 'action 6.1.2', NULL, 16, 0, 0);
INSERT INTO dico_action VALUES (23, '6.1.3', 'action 6.1.3', NULL, 16, 0, 0);
INSERT INTO dico_action VALUES (24, '6.2.1', 'action 6.2.1', NULL, 17, 2, 0);
INSERT INTO dico_action VALUES (25, '6.3.1', 'action 6.3.1', NULL, 18, 0, 1);


--
-- TOC entry 2126 (class 0 OID 26018086)
-- Dependencies: 173
-- Data for Name: dico_activite_transv; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO dico_activite_transv VALUES (1, 'activ 1 transv');
INSERT INTO dico_activite_transv VALUES (2, 'activ 2 transv');
INSERT INTO dico_activite_transv VALUES (3, 'activ 3 transv');


--
-- TOC entry 2127 (class 0 OID 26018092)
-- Dependencies: 174
-- Data for Name: dico_agent; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO dico_agent VALUES (1, 'admin', 'mpadmin', NULL, NULL, NULL);


--
-- TOC entry 2128 (class 0 OID 26018095)
-- Dependencies: 175
-- Data for Name: dico_commune; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO dico_commune VALUES (1, 'com 1');
INSERT INTO dico_commune VALUES (2, 'com 2');
INSERT INTO dico_commune VALUES (3, 'com 3');
INSERT INTO dico_commune VALUES (4, 'com 4');
INSERT INTO dico_commune VALUES (5, 'com 5');
INSERT INTO dico_commune VALUES (6, 'com 6');
INSERT INTO dico_commune VALUES (7, 'com 7');
INSERT INTO dico_commune VALUES (8, 'com 8');
INSERT INTO dico_commune VALUES (9, 'com 9');
INSERT INTO dico_commune VALUES (10, 'com 10');


--
-- TOC entry 2129 (class 0 OID 26018098)
-- Dependencies: 176
-- Data for Name: dico_domaine_activite; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO dico_domaine_activite VALUES (1, '1', 'dom1', 'domaine 1', NULL);
INSERT INTO dico_domaine_activite VALUES (2, '2', 'dom2', 'domaine 2', NULL);
INSERT INTO dico_domaine_activite VALUES (3, '3', 'dom3', 'domaine 3', NULL);
INSERT INTO dico_domaine_activite VALUES (4, '4', 'dom4', 'domaine 4', NULL);
INSERT INTO dico_domaine_activite VALUES (5, '5', 'dom5', 'domaine 5', NULL);
INSERT INTO dico_domaine_activite VALUES (6, '6', 'dom6', 'domaine 6', NULL);


--
-- TOC entry 2130 (class 0 OID 26018104)
-- Dependencies: 177
-- Data for Name: dico_duree; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO dico_duree VALUES (1, '2h', NULL);
INSERT INTO dico_duree VALUES (2, '4h', NULL);
INSERT INTO dico_duree VALUES (3, '6h', NULL);
INSERT INTO dico_duree VALUES (4, '8h', NULL);
INSERT INTO dico_duree VALUES (5, '10h', NULL);
INSERT INTO dico_duree VALUES (6, '12h', NULL);
INSERT INTO dico_duree VALUES (7, '14h', NULL);
INSERT INTO dico_duree VALUES (8, '16h', NULL);
INSERT INTO dico_duree VALUES (9, '18h', NULL);
INSERT INTO dico_duree VALUES (10, '20h', NULL);
INSERT INTO dico_duree VALUES (11, '22h', NULL);
INSERT INTO dico_duree VALUES (12, '24h', NULL);
INSERT INTO dico_duree VALUES (13, '26h', NULL);
INSERT INTO dico_duree VALUES (14, '28h', NULL);
INSERT INTO dico_duree VALUES (15, '30h', NULL);
INSERT INTO dico_duree VALUES (16, '32h', NULL);
INSERT INTO dico_duree VALUES (17, '34h', NULL);
INSERT INTO dico_duree VALUES (18, '36h', NULL);
INSERT INTO dico_duree VALUES (19, '38h', NULL);
INSERT INTO dico_duree VALUES (20, '40h', NULL);


--
-- TOC entry 2131 (class 0 OID 26018107)
-- Dependencies: 178
-- Data for Name: dico_jour; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- TOC entry 2132 (class 0 OID 26018110)
-- Dependencies: 179
-- Data for Name: dico_maitrise; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO dico_maitrise VALUES (1, 'maitr 1');
INSERT INTO dico_maitrise VALUES (2, 'maitre 2');
INSERT INTO dico_maitrise VALUES (3, 'maitr 3');
INSERT INTO dico_maitrise VALUES (4, 'maitr 4');
INSERT INTO dico_maitrise VALUES (5, 'maitr 5');
INSERT INTO dico_maitrise VALUES (6, 'maitr 6');
INSERT INTO dico_maitrise VALUES (7, 'maitr 7');
INSERT INTO dico_maitrise VALUES (8, 'maitr 8');
INSERT INTO dico_maitrise VALUES (9, 'maitr 9');
INSERT INTO dico_maitrise VALUES (10, 'maitr 10');
INSERT INTO dico_maitrise VALUES (0, 'Sans objet');


--
-- TOC entry 2133 (class 0 OID 26018113)
-- Dependencies: 180
-- Data for Name: dico_semaine; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO dico_semaine VALUES (1, 'Semaine 1');
INSERT INTO dico_semaine VALUES (10, 'Semaine 10');
INSERT INTO dico_semaine VALUES (9, 'Semaine 9');
INSERT INTO dico_semaine VALUES (8, 'Semaine 8');
INSERT INTO dico_semaine VALUES (7, 'Semaine 7');
INSERT INTO dico_semaine VALUES (6, 'Semaine 6');
INSERT INTO dico_semaine VALUES (5, 'Semaine 5');
INSERT INTO dico_semaine VALUES (4, 'Semaine 4');
INSERT INTO dico_semaine VALUES (3, 'Semaine 3');
INSERT INTO dico_semaine VALUES (2, 'Semaine 2');


--
-- TOC entry 2134 (class 0 OID 26018116)
-- Dependencies: 181
-- Data for Name: dico_service; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- TOC entry 2135 (class 0 OID 26018122)
-- Dependencies: 182
-- Data for Name: dico_territoire; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO dico_territoire VALUES (1, 'terr 1');
INSERT INTO dico_territoire VALUES (2, 'terr 2');
INSERT INTO dico_territoire VALUES (3, 'terr 3');
INSERT INTO dico_territoire VALUES (4, 'terr 4');
INSERT INTO dico_territoire VALUES (5, 'terr 5');
INSERT INTO dico_territoire VALUES (6, 'terr 6');
INSERT INTO dico_territoire VALUES (7, 'terr 7');
INSERT INTO dico_territoire VALUES (0, 'Indéterminé PNV');


--
-- TOC entry 2136 (class 0 OID 26018125)
-- Dependencies: 183
-- Data for Name: dico_theme; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO dico_theme VALUES (10, 4, '4.1', 'theme 4.1', NULL);
INSERT INTO dico_theme VALUES (11, 4, '4.2', 'theme 4.2', NULL);
INSERT INTO dico_theme VALUES (12, 4, '4.3', 'theme 4.3', NULL);
INSERT INTO dico_theme VALUES (1, 1, '1.1', 'theme 1.1', NULL);
INSERT INTO dico_theme VALUES (13, 5, '5.1', 'theme 5.1', NULL);
INSERT INTO dico_theme VALUES (14, 5, '5.2', 'theme 5.2', NULL);
INSERT INTO dico_theme VALUES (15, 5, '5.3', 'theme 5.3', NULL);
INSERT INTO dico_theme VALUES (16, 6, '6.1', 'theme 6.1', NULL);
INSERT INTO dico_theme VALUES (17, 6, '6.2', 'theme 6.2', NULL);
INSERT INTO dico_theme VALUES (18, 6, '6.3', 'theme 6.3', NULL);
INSERT INTO dico_theme VALUES (2, 1, '1.2', 'theme 1.2', NULL);
INSERT INTO dico_theme VALUES (3, 1, '1.3', 'theme 1.3', NULL);
INSERT INTO dico_theme VALUES (4, 2, '2.1', 'theme 2.1', NULL);
INSERT INTO dico_theme VALUES (5, 2, '2.2', 'theme 2.2', NULL);
INSERT INTO dico_theme VALUES (6, 2, '2.3', 'theme 2.3', NULL);
INSERT INTO dico_theme VALUES (7, 3, '3.1', 'theme 3.1', NULL);
INSERT INTO dico_theme VALUES (8, 3, '3.2', 'theme 3.2', NULL);
INSERT INTO dico_theme VALUES (9, 3, '3.3', 'theme 3.3', NULL);


--
-- TOC entry 2139 (class 0 OID 26018271)
-- Dependencies: 186
-- Data for Name: rel_territoire_commune; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO rel_territoire_commune VALUES (1, 1, 1);
INSERT INTO rel_territoire_commune VALUES (2, 1, 2);
INSERT INTO rel_territoire_commune VALUES (3, 1, 3);
INSERT INTO rel_territoire_commune VALUES (4, 2, 4);
INSERT INTO rel_territoire_commune VALUES (5, 3, 5);
INSERT INTO rel_territoire_commune VALUES (6, 4, 6);
INSERT INTO rel_territoire_commune VALUES (7, 4, 7);
INSERT INTO rel_territoire_commune VALUES (8, 5, 8);
INSERT INTO rel_territoire_commune VALUES (9, 5, 9);
INSERT INTO rel_territoire_commune VALUES (11, 5, 10);


--
-- TOC entry 2151 (class 0 OID 0)
-- Dependencies: 185
-- Name: rel_territoire_commune_id_rel_terr_com_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('rel_territoire_commune_id_rel_terr_com_seq', 11, true);


--
-- TOC entry 2137 (class 0 OID 26018134)
-- Dependencies: 184
-- Data for Name: rel_val_action_annee; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- TOC entry 1967 (class 2606 OID 26018139)
-- Name: pk_id_action; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY dico_action
    ADD CONSTRAINT pk_id_action PRIMARY KEY (id_action);


--
-- TOC entry 1993 (class 2606 OID 26018141)
-- Name: pk_id_action_annee; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY rel_val_action_annee
    ADD CONSTRAINT pk_id_action_annee PRIMARY KEY (id_action, annee_non_valide);


--
-- TOC entry 1962 (class 2606 OID 26018143)
-- Name: pk_id_activite; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY activite
    ADD CONSTRAINT pk_id_activite PRIMARY KEY (id_activite);


--
-- TOC entry 1969 (class 2606 OID 26018145)
-- Name: pk_id_activite_transv; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY dico_activite_transv
    ADD CONSTRAINT pk_id_activite_transv PRIMARY KEY (id_activite_transv);


--
-- TOC entry 1974 (class 2606 OID 26018147)
-- Name: pk_id_commune; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY dico_commune
    ADD CONSTRAINT pk_id_commune PRIMARY KEY (id_commune);


--
-- TOC entry 1976 (class 2606 OID 26018149)
-- Name: pk_id_dom_acti; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY dico_domaine_activite
    ADD CONSTRAINT pk_id_dom_acti PRIMARY KEY (id_domaine_acti);


--
-- TOC entry 1978 (class 2606 OID 26018151)
-- Name: pk_id_duree; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY dico_duree
    ADD CONSTRAINT pk_id_duree PRIMARY KEY (id_duree);


--
-- TOC entry 1980 (class 2606 OID 26018153)
-- Name: pk_id_jour; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY dico_jour
    ADD CONSTRAINT pk_id_jour PRIMARY KEY (id_jour);


--
-- TOC entry 1982 (class 2606 OID 26018155)
-- Name: pk_id_maitrise; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY dico_maitrise
    ADD CONSTRAINT pk_id_maitrise PRIMARY KEY (id_maitrise);


--
-- TOC entry 1996 (class 2606 OID 26018276)
-- Name: pk_id_rel_terr_com; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY rel_territoire_commune
    ADD CONSTRAINT pk_id_rel_terr_com PRIMARY KEY (id_rel_terr_com);


--
-- TOC entry 1984 (class 2606 OID 26018157)
-- Name: pk_id_semaine; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY dico_semaine
    ADD CONSTRAINT pk_id_semaine PRIMARY KEY (id_semaine);


--
-- TOC entry 1986 (class 2606 OID 26018159)
-- Name: pk_id_service; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY dico_service
    ADD CONSTRAINT pk_id_service PRIMARY KEY (id_service);


--
-- TOC entry 1988 (class 2606 OID 26018161)
-- Name: pk_id_territoire; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY dico_territoire
    ADD CONSTRAINT pk_id_territoire PRIMARY KEY (id_territoire);


--
-- TOC entry 1991 (class 2606 OID 26018165)
-- Name: pk_id_theme; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY dico_theme
    ADD CONSTRAINT pk_id_theme PRIMARY KEY (id_theme);


--
-- TOC entry 1972 (class 2606 OID 26018167)
-- Name: pk_id_utilisateur; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY dico_agent
    ADD CONSTRAINT pk_id_utilisateur PRIMARY KEY (id_utilisateur);


--
-- TOC entry 1963 (class 1259 OID 26018168)
-- Name: fki_dico_action_id_maitrise; Type: INDEX; Schema: public; Owner: postgres; Tablespace: 
--

CREATE INDEX fki_dico_action_id_maitrise ON dico_action USING btree (id_maitrise);


--
-- TOC entry 1964 (class 1259 OID 26018169)
-- Name: fki_dico_action_id_territoire; Type: INDEX; Schema: public; Owner: postgres; Tablespace: 
--

CREATE INDEX fki_dico_action_id_territoire ON dico_action USING btree (id_territoire);


--
-- TOC entry 1989 (class 1259 OID 26018170)
-- Name: fki_dico_theme_id_domaine_acti; Type: INDEX; Schema: public; Owner: postgres; Tablespace: 
--

CREATE INDEX fki_dico_theme_id_domaine_acti ON dico_theme USING btree (id_domaine_acti);


--
-- TOC entry 1953 (class 1259 OID 26018171)
-- Name: fki_id_action; Type: INDEX; Schema: public; Owner: postgres; Tablespace: 
--

CREATE INDEX fki_id_action ON activite USING btree (id_action);


--
-- TOC entry 1954 (class 1259 OID 26018172)
-- Name: fki_id_activite_transv; Type: INDEX; Schema: public; Owner: postgres; Tablespace: 
--

CREATE INDEX fki_id_activite_transv ON activite USING btree (id_activite_transv);


--
-- TOC entry 1955 (class 1259 OID 26018173)
-- Name: fki_id_agent; Type: INDEX; Schema: public; Owner: postgres; Tablespace: 
--

CREATE INDEX fki_id_agent ON activite USING btree (id_agent);


--
-- TOC entry 1956 (class 1259 OID 26018174)
-- Name: fki_id_duree; Type: INDEX; Schema: public; Owner: postgres; Tablespace: 
--

CREATE INDEX fki_id_duree ON activite USING btree (id_duree);


--
-- TOC entry 1957 (class 1259 OID 26018175)
-- Name: fki_id_jour; Type: INDEX; Schema: public; Owner: postgres; Tablespace: 
--

CREATE INDEX fki_id_jour ON activite USING btree (id_jour);


--
-- TOC entry 1958 (class 1259 OID 26018176)
-- Name: fki_id_maitrise; Type: INDEX; Schema: public; Owner: postgres; Tablespace: 
--

CREATE INDEX fki_id_maitrise ON activite USING btree (id_maitrise);


--
-- TOC entry 1959 (class 1259 OID 26018177)
-- Name: fki_id_semaine; Type: INDEX; Schema: public; Owner: postgres; Tablespace: 
--

CREATE INDEX fki_id_semaine ON activite USING btree (id_semaine);


--
-- TOC entry 1970 (class 1259 OID 26018178)
-- Name: fki_id_service; Type: INDEX; Schema: public; Owner: postgres; Tablespace: 
--

CREATE INDEX fki_id_service ON dico_agent USING btree (id_service);


--
-- TOC entry 1960 (class 1259 OID 26018179)
-- Name: fki_id_territoire; Type: INDEX; Schema: public; Owner: postgres; Tablespace: 
--

CREATE INDEX fki_id_territoire ON activite USING btree (id_territoire);


--
-- TOC entry 1965 (class 1259 OID 26018180)
-- Name: fki_id_theme; Type: INDEX; Schema: public; Owner: postgres; Tablespace: 
--

CREATE INDEX fki_id_theme ON dico_action USING btree (id_theme);


--
-- TOC entry 1994 (class 1259 OID 26018287)
-- Name: fki_rel_commune; Type: INDEX; Schema: public; Owner: postgres; Tablespace: 
--

CREATE INDEX fki_rel_commune ON rel_territoire_commune USING btree (id_commune);


--
-- TOC entry 2006 (class 2606 OID 26018184)
-- Name: fk_dico_action_id_maitrise; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY dico_action
    ADD CONSTRAINT fk_dico_action_id_maitrise FOREIGN KEY (id_maitrise) REFERENCES dico_maitrise(id_maitrise) ON UPDATE CASCADE ON DELETE SET NULL;


--
-- TOC entry 2007 (class 2606 OID 26018189)
-- Name: fk_dico_action_id_territoire; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY dico_action
    ADD CONSTRAINT fk_dico_action_id_territoire FOREIGN KEY (id_territoire) REFERENCES dico_territoire(id_territoire) ON UPDATE CASCADE ON DELETE SET NULL;


--
-- TOC entry 2010 (class 2606 OID 26018194)
-- Name: fk_dico_theme_id_domaine_acti; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY dico_theme
    ADD CONSTRAINT fk_dico_theme_id_domaine_acti FOREIGN KEY (id_domaine_acti) REFERENCES dico_domaine_activite(id_domaine_acti) ON UPDATE CASCADE ON DELETE SET NULL;


--
-- TOC entry 1997 (class 2606 OID 26018199)
-- Name: fk_id_action; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY activite
    ADD CONSTRAINT fk_id_action FOREIGN KEY (id_action) REFERENCES dico_action(id_action) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- TOC entry 1998 (class 2606 OID 26018204)
-- Name: fk_id_activite_transv; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY activite
    ADD CONSTRAINT fk_id_activite_transv FOREIGN KEY (id_activite_transv) REFERENCES dico_activite_transv(id_activite_transv) ON UPDATE CASCADE ON DELETE SET NULL;


--
-- TOC entry 1999 (class 2606 OID 26018209)
-- Name: fk_id_agent; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY activite
    ADD CONSTRAINT fk_id_agent FOREIGN KEY (id_agent) REFERENCES dico_agent(id_utilisateur) ON UPDATE CASCADE;


--
-- TOC entry 2001 (class 2606 OID 26018219)
-- Name: fk_id_commune; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY activite
    ADD CONSTRAINT fk_id_commune FOREIGN KEY (id_commune) REFERENCES dico_commune(id_commune) ON UPDATE CASCADE;


--
-- TOC entry 2000 (class 2606 OID 26018214)
-- Name: fk_id_duree; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY activite
    ADD CONSTRAINT fk_id_duree FOREIGN KEY (id_duree) REFERENCES dico_duree(id_duree) ON UPDATE CASCADE;


--
-- TOC entry 2002 (class 2606 OID 26018224)
-- Name: fk_id_jour; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY activite
    ADD CONSTRAINT fk_id_jour FOREIGN KEY (id_jour) REFERENCES dico_jour(id_jour) ON UPDATE CASCADE;


--
-- TOC entry 2003 (class 2606 OID 26018229)
-- Name: fk_id_maitrise; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY activite
    ADD CONSTRAINT fk_id_maitrise FOREIGN KEY (id_maitrise) REFERENCES dico_maitrise(id_maitrise) ON UPDATE CASCADE ON DELETE SET NULL;


--
-- TOC entry 2004 (class 2606 OID 26018234)
-- Name: fk_id_semaine; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY activite
    ADD CONSTRAINT fk_id_semaine FOREIGN KEY (id_semaine) REFERENCES dico_semaine(id_semaine) ON UPDATE CASCADE;


--
-- TOC entry 2009 (class 2606 OID 26018239)
-- Name: fk_id_service; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY dico_agent
    ADD CONSTRAINT fk_id_service FOREIGN KEY (id_service) REFERENCES dico_service(id_service) ON UPDATE CASCADE ON DELETE SET NULL;


--
-- TOC entry 2005 (class 2606 OID 26018244)
-- Name: fk_id_territoire; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY activite
    ADD CONSTRAINT fk_id_territoire FOREIGN KEY (id_territoire) REFERENCES dico_territoire(id_territoire) ON UPDATE CASCADE ON DELETE SET NULL;


--
-- TOC entry 2008 (class 2606 OID 26018249)
-- Name: fk_id_theme; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY dico_action
    ADD CONSTRAINT fk_id_theme FOREIGN KEY (id_theme) REFERENCES dico_theme(id_theme) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- TOC entry 2012 (class 2606 OID 26018277)
-- Name: fk_rel_commune; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY rel_territoire_commune
    ADD CONSTRAINT fk_rel_commune FOREIGN KEY (id_commune) REFERENCES dico_commune(id_commune) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- TOC entry 2013 (class 2606 OID 26018282)
-- Name: fk_rel_territoire; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY rel_territoire_commune
    ADD CONSTRAINT fk_rel_territoire FOREIGN KEY (id_territoire) REFERENCES dico_territoire(id_territoire) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- TOC entry 2011 (class 2606 OID 26018264)
-- Name: rel_val_action_annee_id_action_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY rel_val_action_annee
    ADD CONSTRAINT rel_val_action_annee_id_action_fkey FOREIGN KEY (id_action) REFERENCES dico_action(id_action) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- TOC entry 2146 (class 0 OID 0)
-- Dependencies: 5
-- Name: public; Type: ACL; Schema: -; Owner: postgres
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;


-- Completed on 2015-02-25 16:25:17 CET

--
-- PostgreSQL database dump complete
--

