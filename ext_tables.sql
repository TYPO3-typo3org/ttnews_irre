CREATE TABLE tt_content (
    irre_parentid int(11) DEFAULT '0' NOT NULL,
    irre_parenttable tinytext NOT NULL,

    KEY ttnews (irre_parentid,sorting)
);

CREATE TABLE tt_news (
    tx_ttnewsirre_content text NOT NULL,
);