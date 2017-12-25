library(boilerpipeR)
library(RCurl)

library(DBI)
library("DBI", lib.loc="~/R/win-library/3.3")

library("RMySQL", lib.loc="~/R/win-library/3.3")
library(RMySQL)

Sys.getenv("root")

args <- commandArgs(trailingOnly=TRUE)

skill <- args[1] 
 
switch (skill,
       "1" = url <- "https://www.naukri.com/java-jobs",
             content <- getURL(url) ,
             extract <- DefaultExtractor(content) ,
             extract ,
       
            java='java' ,
            articleextract <- ArticleExtractor(extract) ,
            articleextract ,
       
            filter <- sub(".*Apply *(.*?) *Jobs*", "\\1",articleextract ) ,
            filter ,
       
            x <- gsub("[^0-9]", "",filter) ,
            x,
            con <- dbConnect(MySQL(), user="root",dbname="form"),
            dbExistsTable(con, "skill"),
       
            sql_command <- paste("INSERT into skill(skill,jobs) VALUES ('",java,"','",x,"');", sep = ""),
       
       #To retrieve data from the database we need to save a results set object.
       rs<-dbSendQuery(con,sql_command),
       #to access the results in R we need to use the fetch function.
       df<- fetch(rs,n=-1),
       df,
       all_cons <- dbListConnections(MySQL(),
       dbClearResult(rs),
       for(con in all_cons)
         dbDisconnect(con)
)









