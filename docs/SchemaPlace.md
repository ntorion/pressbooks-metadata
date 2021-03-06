Back to [Shema Used](/docs/SchemaUsed.md)

Level 1: MultiSite
Level 2: Book level / Site Level
Level 3: Post level

(Tengo que crear una columna nueva donde diga donde se ven las cosas )

# Schema Properties Placed
## Book Information Page
### General Book Information (Metabox)
| Code | Field Name | PB Description | Description | Placement
| ---- | ---------- | -------------- | ----------- | ---------
| GBI-01 | Title | NO INFO | 
| GBI-02 | Short Title | In case of long titles that might be truncated in running heads in the PDF export. | A short version of the tittle.
| **GBI-03** | Subtitle | | The subtitle of the book.
| **GBI-04** | Author | | The author of the book. 
| GBI-05 | Author, file as | This ensures that your ebook will sort properly in ebook stores, by the author's last name. | The author of the book by last name, name.
| GBI-06 | Contributing Autors | This may be used when more than one person shares the responsibility for the intellectual content of a book. | Name of Contributing Autors.
| **GBI-07** | Publisher | This text appears on the title page of your book. | The publisher of the book. **(Used Twice)**
| **GBI-08** | Publisher City | This text appears on the title page of your book. | The Publisher City of the book.
| **GBI-09** | Publication Date | This is added to the metadata in your ebook. | Date of first publication. 
| GBI-10 | On-Sale Date | This is added to the metadata in your ebook. | Book Release date.
| GBI-11 | Ebook ISBN | ISBN is the International Standard Book Number, and you'll need one if you want to sell your book in some online ebook stores. This is added to the metadata in your ebook.| Ebook ISBN
| GBI-12 | Print ISBN | ISBN is the International Standard Book Number, and you'll need one if you want to sell your book in online and physical book stores. | Print ISBN
| **GBI-13** | Language | This sets metadata in your ebook, making it easier to find in some stores. It also changes some system generated content for supported languages, such as the "Contents" header. | Language in which the content is written. **(Used Twice)**
| **GBI-14** | Illustrator | The illustrator of the book. | The illustrator of the book.
| **GBI-15** | Book Edition | The edition of the book.| The edition of the book.

### Educational Information
Code | Field Name | PB Description | Description 
--- | --- | --- | --- 
| **EI-01** | Subject Name | * The Subject Name is required. | The name of the subject.
| **EI-02** | Small Description | A short description about this subject. | A short description about this subject. 
| **EI-03** | Course Code | The identifier for the Course. |  The identifier for the Course used by the course provider 
| **EI-04** | ISCED field of education | Broad field of education according to ISCED-F 2013. | Field of education
| **EI-05** | Provider | The Organization, University or Person who provides this subject. |  The Organization, University or Person who provides this subject.
| **EI-06** | ISCED level of education | Level of education according to ISCED-P 2011 | Level of education according to ISCED-P 2011 | The target age of this book |  
| **EI-07** | Age Range | The target age of this book | The target age of this book. **(Used Twice)**
| **EI-08** | Educational Level | The level of this subject. For ex. B1 for an English Course, or Grade 2 for a Physics Course. | The level of this subject.
| **EI-09** | Course Prerequisites | Requirements for taking the Course. | Requirements for taking the Course.
| **EI-10** | Educational Framework | The Framework that the educational level belongs to. | The Framework that the educational level belongs to.
| **EI-11** | Learning Resource Type | The kind of resource this book represents | The kind of resource this book represents.
| **EI-12** | Interactivity Type | The interactivity type of this book | The predominant mode of learning supported by the learning resource. 
| **EI-13** | Class Learning Time | The time required for this book (Hours). | The time required for this book.
| **EI-14** | License URL | |  The license URL. **(Used Twice)**
| **EI-15** | Bibliography URL | The URL of a website/book this book is inspirated of | The URL of a website/book this book is inspirated of.

### Cover Image
| Code | Field Name | PB Description | Description 
| --- | --- | --- | --- 
| **CI-01** | Cover Image | This cover will be included in your ebook files but not your PDF export.| The cover of the book.

### Copyright
| Code | Field Name | PB Description | Description 
| --- | --- | --- | --- 
| **CR-01** | Copyright Year | Year that the book is/was published.| Year that the book is/was published. **(Used Twice)**
| **CR-02** | Copyright Holder | Name of the copyright holder. | Name of the copyright holder. **(Used Twice)**
| CR-03 | Copyright License | You can select various licenses including Creative Commons. | Various options of licenses including CC.
| CR-04 | Copyright Notice | Enter a custom copyright notice, with whatever infomation you like. This will override the auto-generated copyright notice, and be inserted after the title page. | Custom copyright notice

### About the Book
| Code | Field Name | PB Description | Description 
| --- | --- | --- | --- 
| AB-01 | Book Tagline | A very short description of your book. It should fit in a Twitter post, and encapsulate your book in the briefest sentence. | A very short description of the book.
| AB-02 | Short Description | A short paragraph about your book, for catalogs, reviewers etc. to quote. | A short paragraph about the book.
| AB-03 | Long Description | The full description of your book. | The full description of the book.

### Aditional Catalog Information
| Code | Field Name | PB Description | Description 
| --- | --- | --- | --- 
| ACI-01 | Series Title | Add if your book is part of a series. This is not used by Pressbooks. | The series title.
| ACI-02 | Series Number | Add if your book is part of a series. This is not used by Pressbooks. | The series number from the series.
| **ACI-03** | Editor | This is not used by Pressbooks. | Specifies the Person who edited the book. **(Used Twice)**
| **ACI-04** | Translator | This is not used by Pressbooks. | The translator of the book.
| **ACI-05** | Keywords | These are added to your webbook cover page, and in your ebook metadata. Keywords are used by online book stores and search engines. |   Keywords or tags used to describe this content.
| ACI-06 | Hashtag | These are added to your webbook cover page. For those of you who like Twitter. | Twitter Hastag.
| ACI-07 | List Price (Print) | This is not used by Pressbooks. | The price of the print version of the book.
| ACI-08 | List Price (PDF) | This is not used by Pressbooks. | The prince of the pdf version of the book.
| ACI-09 | List Price (ebook) | This is not used by Pressbooks. | The price of the ebook version of the book.
| ACI-10 | List Price (web) | This is not used by Pressbooks. | The price of the web version of the book.
| ACI-11 | Audience | The target audience for your book. | The target audience of the book
| **ACI-12** | BISAC Subject(s) | BISAC Subject Headings help libraries and (e)book stores properly classify your book. | The subject matter of the content. **(Used twice)**
| ACI-13 | BISAC Regional Theme |  | Optional code.
| ACI-14 | Catalog Order |  | 

Back to [Shema Used](pressbooks-metadata/docs/SchemaUsed.md)


## Post Page
### Chapter Metadata
| Code | Field Name | PB Description | Description 
| --- | --- | --- | --- 
| CM-01 | Chapter Short Title |  (appears in the PDF running header) | ABC
| **CM-02** | Chapter Subtitle |  (appears in the Web/ebook/PDF output) | ABC
| **CM-03** | Chapter Author | ABC | ABC


### Custom Chapter Metadata
| Code | Field Name | PB Description | Description 
| --- | --- | --- | --- 



## Author Profile Page
### Name (Metabox)
| Code | Field Name | PB Description | Description 
| --- | --- | --- | --- 
| AP_N-01 | Nickname | (required) | ABC

### Contact Info
| Code | Field Name | PB Description | Description 
| --- | --- | --- | --- 
| AP_CI-01 | Email  | (required) | ---
| AP_CI-02 | Website  | --- | ---


### About Yourself
| Code | Field Name | PB Description | Description 
| --- | --- | --- | --- 
| AP_AY-01 | Biographical Info | Share a little biographical information to fill out your profile. This may be shown publicly. | ---
| AP_AY-02 | Profile Picture | You can change your profile picture on Gravatar. | ---















Back to [Shema Used](pressbooks-metadata/docs/SchemaUsed.md)
