
library(DBI)
#The DBI package defines a common interface between the R and DBMS. 
#The interface defines a small set of classes and methods similar to JDBC of JAVA

library(RMySQL)

args <- commandArgs(trailingOnly=TRUE)

name<-args[1]
age<-12
marks<-13

con <- dbConnect(MySQL(), user="root",dbname="form")
dbExistsTable(con, "site")
sql_command <- paste("INSERT into site(id,name,age,marks) VALUES (' ','",name,"','",age,"','",marks,"');", sep = "")

#To retrieve data from the database we need to save a results set object.
rs<-dbSendQuery(con,sql_command)
#to access the results in R we need to use the fetch function.
df<- fetch(rs,n=-1)
all_cons <- dbListConnections(MySQL())
dbClearResult(rs)
for(con in all_cons)
  dbDisconnect(con)
#-------------------------------------------------------

