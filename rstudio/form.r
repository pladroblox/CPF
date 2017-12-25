
install.packages("RMySQL")
install.packages("DBI")

library(DBI)
#The DBI package defines a common interface between the R and DBMS. 
#The interface defines a small set of classes and methods similar to JDBC of JAVA

library(RMySQL)

mtcars
name<-"xyz"
age<-18

marks<-95
data <-mtcars
con <- dbConnect(MySQL(), user="root",dbname="form")
dbExistsTable(con, "site")
sql_command <- paste("INSERT into site(id,name,age,marks) VALUES (' ','",name,"','",age,"','",marks,"');", sep = "")
 
#To retrieve data from the database we need to save a results set object.
rs<-dbSendQuery(con,sql_command)
#to access the results in R we need to use the fetch function.
df<- fetch(rs,n=-1)
df
all_cons <- dbListConnections(MySQL())
dbClearResult(rs)
for(con in all_cons)
dbDisconnect(con)
#-------------------------------------------------------

con <- dbConnect(MySQL(), user="root",dbname="form")
dbExistsTable(con, "tableform")
sql_command <- "SELECT name,age,marks FROM site"

rs<-dbSendQuery(con,sql_command)
df<- fetch(rs,n=-1)
df



data<-read.csv("C:/Users/admin/Documents/sies.csv")
data
plot(data$mpg,data$hp,type="h",main="extc")

png(filename="temp.png", width=500, height=500)
plot(data$year,data$it,type="h",main="extc")
dev.off()


yall_cons <- dbListConnections(MySQL())
dbClearResult(rs)
for(con in all_cons)
 dbDisconnect(con)
