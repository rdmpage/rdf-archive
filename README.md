# RDF Archives

Archives of data harvested by resolving LSIDs (or equivalent interfaces)

## Merging RDF directories

When harvesting RDF from biodiversity databases typically we get one RDF file per record (e.g., by resolving a LSID). These are then stored in folders with a maximum of 1000 files. Because downloading may happen at different times and on different machines, folders may be scattered around and have incomplete contents. To merge these (on Mac Os X) we can do this:

```
cp -pPR source target
```

For example: 

```
cd /Volumes/WD Elements 1TB/working/indexfungorum-rdf-harvest-o
cp -pPR rdf/ ~/Desktop/rdf-archive-o/indexfungorum/rdf/
```



(see http://stackoverflow.com/questions/160204/how-to-use-ditto-on-os-x-to-work-like-cp-a-on-linux )

## Compressing RDF

To compress all the folders with RDF:

```
cd indexfungorum
tar -cvzf indexfungorum-rdf.tgz rdf/
```




