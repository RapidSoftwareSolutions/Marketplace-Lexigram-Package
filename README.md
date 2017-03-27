[![](https://scdn.rapidapi.com/RapidAPI_banner.png)](https://rapidapi.com/package/Lexigram/functions?utm_source=RapidAPIGitHub_LexigramFunctions&utm_medium=button&utm_content=RapidAPI_GitHub)
# Lexigram Package

* Domain: [Lexigram](http://www.lexigram.io/)
* Credentials: apiKey

## How to get credentials: 
1. Get apiKey from [Lexigram](https://app.lexigram.io/#/account) 
 
## Lexigram.search
Run a keyword search over the Lexigram medical knowledge base. The keywords are matched against labels and synonyms of medical concepts providing a list ranked by relevance. Our relevance scoring mechanism uses a decay function tuned to term relevance and term proximity of the input keywords that works very well for medical knowledge.

| Field | Type  | Description
|-------|-------|----------
| apiKey| credentials| Api key
| query | String| Text to query. Example: aspirin
| limit | Number| Limits the result. Default: 20

## Lexigram.getConcept
Lookup Lexigraph concepts. All Lexigraph concepts that have an lexigraph_id beginning lxg: are valid on this endpoint. The response will contain a single object with everything Lexigram knows about that medical concept including the original terminology IDs from SNOMED CT, RXNORM, ICD9, etc.

| Field    | Type  | Description
|----------|-------|----------
| apiKey   | credentials| Api key
| conceptId| String| Concept ID

## Lexigram.getConceptAncestors
Returns a paginated list (1000 results per page) of all ancestors or descendants of the provided concept id. An empty list is returned if the concept has no ancestors or descendants.

| Field    | Type  | Description
|----------|-------|----------
| apiKey   | credentials| Api key
| conceptId| String| Concept ID
| page     | Number| Pagination page

## Lexigram.getConceptDescendants
Returns a paginated list (1000 results per page) of all ancestors or descendants of the provided concept id. An empty list is returned if the concept has no ancestors or descendants.

| Field    | Type  | Description
|----------|-------|----------
| apiKey   | credentials| Api key
| conceptId| String| Concept ID
| page     | Number| Pagination page

## Lexigram.extractEntities
The core of our data extraction API. Matches the input text against concepts in the Lexigraph to find and extract concept matches. Maintains pointers to the exact character offsets matched in the text. Identifies the types of the concept (drug, anatomy, problem, etc.), its context (negation, speculation, patient/family history, demographics), and a sectionId if it appears in a known section.

| Field         | Type   | Description
|---------------|--------|----------
| apiKey        | credentials | Api key
| conceptId     | String | Concept ID
| query         | String | Text to search
| withContext   | Boolean| True performs contextulization and includes contexts in the result.
| withMatchLogic| String | 'longest' expands to the longest unique match during concept detection. 'ignore-length' returns all detected concepts regardless if a concept is contained or part of a larger concept e.g. 'Kidney Failure' will return 'kidney', 'Failure', and 'Kidney Failure' instead of only 'kidney Failure'. Allowed: longest, ignore-length. Default: longest
| withText      | Boolean| true returns the orginal text in the response.

## Lexigram.highlightEntities
Returns HTML enriched versions of the input text surrounding found concepts in span tags to aid visualization of the data.

| Field         | Type   | Description
|---------------|--------|----------
| apiKey        | credentials | Api key
| query         | String | Text to search
| withContext   | Boolean| True performs contextulization and includes contexts in the result.
| withMatchLogic| String | 'longest' expands to the longest unique match during concept detection. 'ignore-length' returns all detected concepts regardless if a concept is contained or part of a larger concept e.g. 'Kidney Failure' will return 'kidney', 'Failure', and 'Kidney Failure' instead of only 'kidney Failure'. Allowed: longest, ignore-length. Default: longest

