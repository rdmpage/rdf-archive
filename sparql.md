# SPARQL queries


## Names by year

```
SELECT  ?year (COUNT(?year) as ?n)
WHERE {
  ?s <http://rs.tdwg.org/ontology/voc/TaxonName#year> ?year .
}
GROUP BY ?year 
ORDER BY ?year
```
