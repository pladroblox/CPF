library(boilerpipeR)
library(RCurl)

library(DBI)
library("DBI", lib.loc="~/R/win-library/3.3")

library("RMySQL", lib.loc="~/R/win-library/3.3")
library(RMySQL)

Sys.getenv("root")

args <- commandArgs(trailingOnly=TRUE)

skill <- args[1]

skill 

x <- 100
con <- dbConnect(MySQL(), user="root",dbname="form")
dbExistsTable(con, "skill")

sql_command <- paste("INSERT into skill(skill,jobs) VALUES ('",skill,"','",x,"');", sep = "")

#To retrieve data from the database we need to save a results set object.
rs<-dbSendQuery(con,sql_command)

df<- fetch(rs,n=-1)
df
all_cons <- dbListConnections(MySQL())
dbClearResult(rs)
for(con in all_cons)
{ dbDisconnect(con)
}

