
## Page 
| uuid |   id    |    title     | locale |
| ---  |   ---   |     ---      |  ---   |
| a6er |   245   | super page 1 |   fr   |
| 40fE |   264   | super page 2 |   fr   | 
| 567f |   598   | super page 3 |   fr   | 
| RE3f |   778   | super page 4 |   fr   |  
| VEez |   866   | super page 5 |   fr   | 

## BlockType 
only if new property in this table. Else, juste do a collection type
| id  |   name    | 
| --- |   ---     |
|  1  | string    |          
|  2  | textarea  |
|  3  | wysiwyg   |  
|  4  | slider    |  
|  5  | image     |  
|  6  | number    |    
|  7  | price     |  
|  8  | date      | 
|  9  | datetime  |        
|  9  | container |    

## BlockContent
| uuid | id  | locale |    entity    | block
| ---  | --- |  ---   |     ---      |
| aze  |  1  | en_en  | PageBlock    |          
| aze  |  1  | fr_fr  | PageBlock    |
| aze  |  2  | en_en  | PageBlock    |  
| aze  |  4  | en_en  | ArticleBlock |  
| aze  |  5  | en_en  | PageBlock    |  
| aze  |  6  | en_en  | PageBlock    |    
| aze  |  7  | en_en  | PageBlock    |   
| aze  |  8  | en_en  | ArticleBlock | 
| aze  |  9  | en_en  | ArticleBlock |        
| aze  |  9  | en_en  | ArticleBlock | 

## PageBlock
| id  | page_id | block_type | admin_column | 
| --- |   ---   |    ---     |      ---     |
|  1  |   xx    |    zz      |       6      |          
|  2  |   xx    |    zz      |       2      | 
|  3  |   xx    |    zz      |       3      |   
|  4  |   xx    |    zz      |       6      |   
|  5  |   xx    |    zz      |       6      |   
|  6  |   xx    |    zz      |       8      |     
|  7  |   xx    |    zz      |       4      |   
|  8  |   xx    |    zz      |       4      |  
|  9  |   xx    |    zz      |      12      |          


Front :
Example for page 1
Foreach PageBlock
    -> display pageBlock type content (ex : wysiwyg)
    -> sorted by order



PHP form to create a page architecture by admin :
Form with collectionType for pageBlock
    -> Load all class implements pageBlockInterface (voir reflection interface)
