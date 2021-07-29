
## Page 
| uuid |   id    |    title     | locale |
| ---  |   ---   |     ---      |  ---   |
| a6er |   245   | super page 1 |   fr   |
| 40fE |   264   | super page 2 |   fr   | 
| 567f |   598   | super page 3 |   fr   | 
| RE3f |   778   | super page 4 |   fr   |  
| VEez |   866   | super page 5 |   fr   |   

## Block
| uuid | entity | entity_id | order | bloc_type |
| ---  |  ---   |    ---    |  ---  |    ---    | 
| aze  |  page  |    xx     |   2   |  string   |     
| aze  |  page  |    xx     |   1   |  wysiwyg  |
| aze  |  page  |    xx     |   3   |  integer  |
| aze  |  page  |    xx     |   4   |    etc    |
| aze  |  page  |    xx     |   6   |    etc    |

## WysiwygBlock
| uuid | page_block_id | locale | content  | other_propery |
| ---  |      ---      |  ---   |   ---    |      ---      |     
| aze  |       1       | en_en  | ezczevzv |      ???      |  
| aze  |       1       | fr_fr  | ezczevzv |      ???      |
| aze  |       2       | en_en  | ezczevzv |      ???      | 
| aze  |       2       | fr_fr  | ezczevzv |      ???      | 
| aze  |       5       | en_en  | ezczevzv |      ???      |  

## string
| uuid | page_block_id | locale | content  | other_propery |
| ---  |      ---      |  ---   |   ---    |      ---      |     
| aze  |       1       | en_en  | ezczevzv |      ???      |  
| aze  |       1       | fr_fr  | ezczevzv |      ???      |
| aze  |       2       | en_en  | ezczevzv |      ???      | 
| aze  |       2       | fr_fr  | ezczevzv |      ???      | 
| aze  |       5       | en_en  | ezczevzv |      ???      |  

Front :
Example for page 1
Foreach PageBlock
    -> display pageBlock type content (ex : wysiwyg)
    -> sorted by order



PHP form to create a page architecture by admin :
Form with collectionType for pageBlock
    -> Load all class implements pageBlockInterface (voir reflection interface)
