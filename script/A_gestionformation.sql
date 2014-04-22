ALTER TABLE participant ADD FOREIGN KEY (idorganisateur) REFERENCES organisateur (idorganisateur);

ALTER TABLE participant ADD FOREIGN KEY (idpersonnel) REFERENCES personnel (idpersonnel);

ALTER TABLE participant ADD FOREIGN KEY (idformation) REFERENCES formation (idformation);

