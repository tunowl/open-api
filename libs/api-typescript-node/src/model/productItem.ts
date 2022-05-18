/**
 * FlowAccount Business API
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0.0
 * 
 *
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

import { RequestFile } from './models';

export class ProductItem {
    'type'?: number;
    'name'?: string | null;
    'description'?: string | null;
    'quantity'?: number;
    'unitName'?: string | null;
    'pricePerUnit'?: number;
    'total'?: number;
    'sellChartOfAccountCode'?: string | null;
    'buyChartOfAccountCode'?: string | null;

    static discriminator: string | undefined = undefined;

    static attributeTypeMap: Array<{name: string, baseName: string, type: string}> = [
        {
            "name": "type",
            "baseName": "type",
            "type": "number"
        },
        {
            "name": "name",
            "baseName": "name",
            "type": "string"
        },
        {
            "name": "description",
            "baseName": "description",
            "type": "string"
        },
        {
            "name": "quantity",
            "baseName": "quantity",
            "type": "number"
        },
        {
            "name": "unitName",
            "baseName": "unitName",
            "type": "string"
        },
        {
            "name": "pricePerUnit",
            "baseName": "pricePerUnit",
            "type": "number"
        },
        {
            "name": "total",
            "baseName": "total",
            "type": "number"
        },
        {
            "name": "sellChartOfAccountCode",
            "baseName": "sellChartOfAccountCode",
            "type": "string"
        },
        {
            "name": "buyChartOfAccountCode",
            "baseName": "buyChartOfAccountCode",
            "type": "string"
        }    ];

    static getAttributeTypeMap() {
        return ProductItem.attributeTypeMap;
    }
}

