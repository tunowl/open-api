=begin
#FlowAccount Open API

#No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)

The version of the OpenAPI document: 1.0.0

Generated by: https://openapi-generator.tech
OpenAPI Generator version: 5.4.0

=end

require 'date'
require 'time'

module OpenapiClient
  class ReportTypes
    N10 = 10.freeze
    N11 = 11.freeze
    N12 = 12.freeze
    N13 = 13.freeze
    N14 = 14.freeze
    N15 = 15.freeze
    N20 = 20.freeze
    N21 = 21.freeze
    N22 = 22.freeze
    N23 = 23.freeze
    N24 = 24.freeze
    N25 = 25.freeze
    N30 = 30.freeze
    N40 = 40.freeze
    N50 = 50.freeze
    N60 = 60.freeze
    N61 = 61.freeze
    N62 = 62.freeze
    N63 = 63.freeze
    N64 = 64.freeze
    N65 = 65.freeze
    N70 = 70.freeze
    N80 = 80.freeze
    N90 = 90.freeze
    N91 = 91.freeze
    N92 = 92.freeze
    N100 = 100.freeze
    N110 = 110.freeze
    N120 = 120.freeze
    N121 = 121.freeze
    N130 = 130.freeze
    N140 = 140.freeze
    N150 = 150.freeze
    N160 = 160.freeze
    N170 = 170.freeze
    N171 = 171.freeze
    N172 = 172.freeze
    N173 = 173.freeze
    N180 = 180.freeze
    N190 = 190.freeze
    N200 = 200.freeze
    N210 = 210.freeze
    N220 = 220.freeze
    N240 = 240.freeze
    N260 = 260.freeze
    N270 = 270.freeze
    N280 = 280.freeze
    N290 = 290.freeze
    N291 = 291.freeze
    N292 = 292.freeze
    N293 = 293.freeze
    N300 = 300.freeze

    # Builds the enum from string
    # @param [String] The enum value in the form of the string
    # @return [String] The enum value
    def self.build_from_hash(value)
      new.build_from_hash(value)
    end

    # Builds the enum from string
    # @param [String] The enum value in the form of the string
    # @return [String] The enum value
    def build_from_hash(value)
      constantValues = ReportTypes.constants.select { |c| ReportTypes::const_get(c) == value }
      raise "Invalid ENUM value #{value} for class #ReportTypes" if constantValues.empty?
      value
    end
  end
end
